<!DOCTYPE html>
	<head>
	</head>
	<body>
		<?php
			# Deleted Code
			
			$id = $_GET['id'];
			$mysqli->real_escape_string($id);
			
			# Deleted code
			$result = mysqli_query($con, $query);
			$row = $result->fetch_assoc();
			# Deleted code
			
			echo '>'.$id.'<br>';
		
			if(isset($output)){ echo $output; }
			else { echo "None found"; }
			
			# Deleted code
			$result1 = mysqli_query($con, $query1);
			$row1 = $result1->fetch_assoc();
			# Deleted code
			
			echo '<br>>'.$id.'<br>';
			
			if(isset($output1)){ echo $output1; }
			else { echo "None found"; }
		
		?>
	</body>
</html>