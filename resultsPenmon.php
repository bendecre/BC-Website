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
				width: 180px;
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
		</script>
	</head>
	
	<?php
		function issetor(&$var, $default = false) { return isset($var) ? $var : $default; }

		# Deleted code
		
		$mysqli->real_escape_string($data);
		$mysqli->real_escape_string($search);
		$mysqli->real_escape_string($precise);
		$mysqli->real_escape_string($operator);
		$mysqli->real_escape_string($data2);
		
		# Deleted code
	
		$result = mysqli_query($con, $query);
		$rowcount = mysqli_num_rows($result);
		
		echo '
		<table class="center" id="datatable">
			<thead>
				<tr>
					<th colspan="6" style="width:1100px;">Results: ' . $rowcount . ' Found, <font color="white" id="loaded">0</font> Loaded <br>Click any column name to sort by ascending/descending order<br><input type="button" value="Select table" onclick="selectElementContents( document.getElementById(\'datatable\') );"></th>
				</tr>
			
				<tr>
					<th>#</th>
					<th>Comments:</th>
					<th>Sequence ID:</th>
					<th>Penmon ID:</th>
					<th>Name:</th>
					<th>Sequence:</th>
				</tr>
			</thead><tbody>
		';

		$id = 1;
		while($row = $result->fetch_assoc()){
			# Deleted code
			$result2 = mysqli_query($con, $query2);
			$row2 = $result2->fetch_assoc();
			
			echo ' <script>unique('.$id.');</script>
				<tr>
					<td>' . $id . ' <BUTTON style="float: right;" onClick="fasta(\''.$row['QueryID'].'\',\'sequence'.$id.'\');">Export Fasta</BUTTON></td>
					<td><textarea id="comment'.$id.'" cols="22" rows="1" style="position: absolute; position: relative">'. issetor($row2['comments']) .'</textarea><br><BUTTON style="width:180px;" onClick="commentSubmit(\'comment'.$id.'\',\''.$row['QueryID'].'\');">Submit</BUTTON></td>
					<td><a href="tpm.php?id='.$qid.'" target="_blank">' . $row['QueryID'] . '</a></td>
					<td>' . $row['SubjectID'] . '</td>
					<td>' . $row['name'] . '</td>
					<td><textarea id="sequence'.$id.'" cols="22">'. $row['sequence'] .'</textarea></td>
				</tr>
			';
			
			$id = $id + 1;
		}

		echo'</tbody></table><br>';
	?>
