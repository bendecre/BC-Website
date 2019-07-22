<!DOCTYPE html>
	<head>
		<script>
			function call(){
				var a = sessionStorage.getItem("sent1");
				var b = sessionStorage.getItem("sent2");
				document.write(">" + "<a href='tpm.php?id=" + a + "'>" + a + "</a>");
				document.write("\n" + b + "\n");
				
				document.write(">" + "<a href='tpm.php?id=" + a + "'>" + a + "</a>");
			}; 
		</script>
	</head>

	<body>
		<script>
			call();
		</script>
		
		<?php
			# Deleted code
			
			$id = $_GET['id'];
			$mysqli->real_escape_string($id);
			
			# Deleted code
			$result = mysqli_query($con, $query);
			$row = $result->fetch_assoc();
			$output = $row['sequence'];
			
			echo ' <br> ';
			
			if(isset($output)){ echo $output; }
			else { echo "None found"; }
		?>
	
	</body>
</html>