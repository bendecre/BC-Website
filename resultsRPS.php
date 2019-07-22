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
				width: 200px;
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
		$mysqli->real_escape_string($precise);

		# Deleted code
		
		$result = mysqli_query($con, $query);
		$rowcount = mysqli_num_rows($result);
		
		echo '
		<table class="center" id="datatable">
			<thead>
				<tr>
					<th colspan="4" style="width:1100px;">Results: '.$rowcount.' Found, <font color="white" id="loaded">0</font> Loaded <br>Click any column name to sort by ascending/descending order</th>
				</tr>
			
				<tr>
					<th onclick="sortTableNum(0)">#</th>
					<th>Sequence<br>Name:</th>
					<th>Annotation:</th>
					<th onclick="sortTableNum(3)">Bitscore:</th>
					<th>e Value:</th>
				</tr>
			</thead><tbody>
		';
		
		$id = 1;

		while($row = $result->fetch_assoc()){
			echo ' <script>unique('.$id.');</script>
				<tr>
					<td>'.$id.'</td>
					<td><a href="tpm.php?id='.$row['sequenceID'].'" target="_blank">'.$row['sequenceID'].'</a></td>
					<td><textarea cols="26">'.$row['annotation'].'</textarea></td>
					<td>'.$row['bitscore'].'</td>
					<td>'.$row['eValue'].'</td>
				</tr>
			';
			$id = $id + 1;
		}
	
		echo'</tbody></table><br>';
	?>
	
</html>
