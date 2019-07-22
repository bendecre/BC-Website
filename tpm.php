<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<style>
			body {
				background-image: none;
			}
		</style>
	</head>

	<body>
	<?php
		# Deleted code
		$data = $mysqli->real_escape_string($data);

		# Deleted code
		$result = mysqli_query($con, $query);
		$rowcount = mysqli_num_rows($result);
	
		echo '
		<table class="center" id="datatable">
			<tr>
				<th colspan="15">Results: ' . $rowcount . ' Found <br>Click any column name to sort by ascending/descending order<br><input type="button" value="Select table" onclick="selectElementContents( document.getElementById(\'datatable\') );"></th>
			</tr>
		
			<tr>
				<th onclick="sortTableNum(0)">#</th>
				<th>Seq. ID</th>
				<th onclick="sortTableNum(3)">AGC Before</th>
				<th onclick="sortTableNum(4)">MG Before</th>
				<th onclick="sortTableNum(5)">PGC Before</th>
				<th onclick="sortTableNum(6)">AGC After</th>
				<th onclick="sortTableNum(7)">MG After</th>
				<th onclick="sortTableNum(8)">PGC After</th>
				<th style="font-size:14px" onclick="sortTableNum(9)">Hepato- pancreas</th>
				<th onclick="sortTableNum(10)">Hemo- cytes</th>
				<th onclick="sortTableNum(11)">BCAG</th>
				<th onclick="sortTableNum(12)">BCES</th>
				<th onclick="sortTableNum(13)">BCP- LEO</th>
				<th onclick="sortTableNum(14)">BCYO</th>
				<th onclick="sortTableNum(15)">Avg</th>
			</tr>
		';
		
		$id = 1;
		while($row = $result->fetch_assoc()){
			
			# Deleted code
			
			$id = $id + 1;
		}
		
		echo '
			</table><br>
		';
		
	?>
	</body>
</html>
