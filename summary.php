<?php
	# Deleted code
	
	if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
	
	# Deleted code
	$result = mysqli_query($con, $query);
	$rowcount = $result->fetch_assoc();
	$rowcount = current($rowcount);
	
	echo '<body> 
		<label>Results in Drosophila:</label> '. $rowcount .'<br>
	';
	
	# Deleted code
	$result = mysqli_query($con, $query);
	$rowcount1 = $result->fetch_assoc();
	$rowcount1 = current($rowcount1); 
	
	echo'
		<label>Results in Propioni:</label> '. $rowcount1 .'<br>
	';
	
	# Deleted code
	$result = mysqli_query($con, $query);
	$rowcount2 = $result->fetch_assoc();
	$rowcount2 = current($rowcount2);
	
	echo'
		<label>Results in Mitochondria:</label> '. $rowcount2 .'<br>
	';
	
	# Deleted code
	$result = mysqli_query($con, $query);
	$rowcount3 = $result->fetch_assoc();
	$rowcount3 = current($rowcount3);
	
	echo'
		<label>Results in Penaeus Monodon:</label> '. $rowcount3 .'<br>
	';
	
	# Deleted code
	$result = mysqli_query($con, $query);
	$rowcount4 = $result->fetch_assoc();
	$rowcount4 = current($rowcount4);
	
	echo'
		<label>Results in v2.transcripts:</label> '. $rowcount4 .'<br>
	';
	
	echo'</body>';
?>

<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<style>
			body { background-image: none; }
		</style>
	</head>

	<body>
		<br><div align="center">
		<a href="ctg/genome.ctg.fasta.tandem.csv.2.7.7.80.10.50.500.summary.html">CTG</a><br>
		<img src="abyss-ctg.PNG"><br><br>
		<a href="scf/genome.scf.fasta.tandem.csv.2.7.7.80.10.50.500.summary.html">SCF</a><br>
		<img src="abyss-scf.PNG"><br><br>
		<h4>Other links:</h4>
		<a href="/contig_size_viewer.html">Icarus Viewer</a><br><br>
		<img src="V1Histogram.jpeg"><br>
		<img src="V2Histogram.jpeg">
		</div>
	</body>
</html>
