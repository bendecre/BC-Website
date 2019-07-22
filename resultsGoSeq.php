<!DOCTYPE HTML>
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
					<th colspan="6" style="width:1100px;">Results: ' . $rowcount . ' Found, <font color="white" id="loaded">0</font> Loaded<br>Click any column name to sort by ascending/descending order<br><input type="button" value="Select table" onclick="selectElementContents( document.getElementById(\'datatable\') );"></input>   <input type="button" value="Export Unique Fasta" onclick="tableFasta(\''.json_encode($array).'\')"></input></th>
				</tr>
			
				<tr>
					<th onclick="sortTableNum(0)">#</th>
					<th onclick="sortTable(1)">Gene Name:</th>
					<th onclick="sortTable(2)">Sequence<br>Name:</th>
					<th onclick="sortTableNum(3)">Bitscore:</th>
					<th onclick="sortTableNum(4)">Percent<br>Identity:</th>
					<th onclick="sortTable(5)">GO Term:</th>
				</tr>
			</thead><tbody>
		';
		
		$id = 1;
		
		while($row = $result->fetch_assoc()){
			# Deleted code
			$id = $id + 1;
		}
		
	echo'</tbody></table><br>';
	?>
	
</html>
