<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<style>
			body { background-image: none; }
			
			table thead tr{
				display:block;
				overflow-y: scroll;
			}

			table th,table td{
				width: 115px;
				word-break: break-all;
			}

			table  tbody{
				word-break: break-all;
				display:block;
				height:475px;
				overflow:auto;
			}
		</style>
		
		<script src="scripts.js">
			function copyText(element) {
				document.getElementById(element).select();
				document.execCommand("Copy");
			}
			
			function tableFasta(q){
				var question = q;
				document.getElementById("loaded").innerHTML = question;
				sessionStorage.setItem("sent", question);
				
				window.open("tableFasta.php", '_blank');
			}
		</script>
	</head>

	<?php
	function issetor(&$var, $default = false) { return isset($var) ? $var : $default; }

	# Deleted code  

	$data = $mysqli->real_escape_string($data);
	$search = $mysqli->real_escape_string($search);
	$precise = $mysqli->real_escape_string($precise);
	$operator = $mysqli->real_escape_string($operator);
	$data2 = $mysqli->real_escape_string($data2);
	
	# Deleted code
	
	$result = mysqli_query($con, $query);
	$rowcount = mysqli_num_rows($result);
	
	$array = array();
	echo '
		<table class="center" id="datatable">
			<thead>
				<tr>
					<th colspan="9" style="width:1100px;">Results: ' . $rowcount . ' Found, <font color="white" id="loaded">0</font> Loaded <br>Click any column name to sort by ascending/descending order<br><input type="button" value="Select table" onclick="selectElementContents( document.getElementById(\'datatable\') );"></input>   <input type="button" value="Export Unique Fasta" onclick="tableFasta(\''.$query.'\')"></input></th>
				</tr>
			
				<tr>
					<th onclick="sortTableNum(0)">#</th>
					<th onclick="sortTable(1)">Gene Name:</th>
					<th>Comments:</th>
					<th onclick="sortTable(2)">Sequence<br>Name:</th>
					<th onclick="sortTableNum(3)">Bitscore:</th>
					<th onclick="sortTableNum(4)">Percent<br>Identity:</th>
					<th onclick="sortTable(5)">GO Term:</th>
					<th onclick="sortTableNum(6)">Sequence<br>Length:</th>
					<th onclick="sortTable(7)">Sequence</th>
				</tr>
			</thead><tbody>
	';

	$count = 0;
	$hold = "";
	$id = 1;

	while($row = $result->fetch_assoc()){
		if($search != "select_sequence"){
			# Deleted code
			$result2 = mysqli_query($con, $query2);
			$row2 = $result2->fetch_assoc();
			
			if(issetor($queryid)){
				echo ' <script>unique('.$id.');</script>
					<tr>
						<td>' . $id . '<BUTTON style="float: right;" onClick="fasta(\''.$queryid.'\',\'sequence'.$id.'\');">Export Fasta</BUTTON></td>
						<td>' . $row['FullNameOfGene'] . '</td>
						<td><textarea id="comment'.$id.'" cols="14" rows="1" style="position: absolute; position: relative">'. issetor($row2['comments']) .'</textarea><br><BUTTON style="width:120px;" onClick="commentSubmit(\'comment'.$id.'\',\''.$queryid.'\');">Submit</BUTTON></td>
						<td id="id'.$id.'"><a href="tpm.php?id='. $queryid.'" target="_blank">' . issetor($queryid) . '</a></td>
						<td>' . issetor($row['Bitscore']) . '</td>
						<td>' . issetor($row['PercentMatch']) . '</td>
						<td id="go'.$id.'"><textarea cols="14" rows="1" style="position: absolute; position: relative">' . $row['GO_terms'] . '</textarea></td>
						<td>' . issetor($row2['Length']) . ' <BUTTON style="float: right;" onClick="copyText(\'sequence'.$id.'\');">Copy-></BUTTON></td>
						<td><textarea id="sequence'.$id.'"cols="13" rows="1">' . issetor($row2['Sequence']) . '</textarea></td>
					</tr>
				';
				$id = $id + 1;
			}
			
		}
		else{
			# Deleted code
			$result2 = mysqli_query($con, $query2);
			$row2 = $result2->fetch_assoc();
			
			if(issetor($seqName)) {
				echo ' <script>unique('.$id.');</script>
					<tr>
						<td>' . $id . '<BUTTON style="float: right;" onClick="fasta(\''.$seqName.'\',\'sequence'.$id.'\');">Export Fasta</BUTTON></td>
						<td>' . $row2['FullNameOfGene'] . '</td>
						<td><textarea id="comment'.$id.'" cols="14" rows="1" style="position: absolute; position: relative">'. issetor($row['comments']) .'</textarea><br><BUTTON style="width:120px;" onClick="commentSubmit(\'comment'.$id.'\',\''.$seqName.'\');">Submit</BUTTON></td>
						<td id="id'.$id.'"><a href="tpm.php?id='.$seqName.'" target="_blank">' . issetor($seqName) . '</a></td>
						<td>' . issetor($row2['Bitscore']) . '</td>
						<td>' . issetor($row2['PercentMatch']) . '</td>
						<td><textarea cols="14" rows="1" style="position: absolute; position: relative">' . $row2['GO_terms'] . '</textarea></td>
						<td>' . issetor($row['Length']) . ' <BUTTON style="float: right;" onClick="copyText(\'sequence'.$id.'\');">Copy-></BUTTON></td>
						<td><textarea id="sequence'.$id.'"cols="13" rows="1">' . issetor($row['Sequence']) . '</textarea></td>
					</tr>
				';
				$id = $id + 1;
			}	
		}
	}
	
	echo'</tbody></table><br>';
	?>
</html>
