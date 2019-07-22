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
				width: 400px;
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
		# Deleted code
		
		$mysqli->real_escape_string($data);
		$mysqli->real_escape_string($search);
		$mysqli->real_escape_string($compare);
		
		# Deleted code
		
		$result = mysqli_query($con, $query);
		$rowcount = mysqli_num_rows($result);
		
		echo '
		<table class="center" id="datatable">
			<thead>
				<tr>
					<th colspan="3" style="width:1100px;">Results: ' . $rowcount . ' Found <br>Click any column name to sort by ascending/descending order<br><input type="button" value="Select table" onclick="selectElementContents( document.getElementById(\'datatable\') );"></th>
				</tr>
				
				<tr>
					<th onclick="sortTableNum(0)">#</th>
					<th>Seq. ID</th>
					<th onclick="sortTableNum(2)">Percent Match</th>
				</tr>
			</thead><tbody>
		';
		
		$id = 1;
		while($row = $result->fetch_assoc()){
			$sid = $row['sequenceID'];
			$percentMatch = $row['percentMatch'];
			
				echo '
				<tr>
					<td>' . $id . '</td>
					<td><a href="tpm.php?id='.$sid.'" target="_blank">' . $sid . '</td>
					<td>' . $percentMatch . '</td>
				</tr>
			';
			
			$id = $id + 1;
		}
		
		echo '
			</tbody></table><br>
		';
	?>

</html>
