<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<style>
			body { background-image: none; }
		</style>
		
		<script language="javascript" type="text/javascript">
			// Making sure no one sends bad things to the MySQL server.			
			function validateForm() {
				var x = document.forms["page"]["id"].value;
				
				if (x.includes("'") && x.includes("--")) {
					alert("Invalid input: ' & --?, please enter VALID input into the input field.");
					return false;
				}
				else if (x == ""){
					alert("Invalid Input: Please enter something into the input field.");
					return false;
				}
				else if (x.includes("--")){
					alert("Invalid Input: do NOT enter a -- character into the input field.");
					return false;
				}
				else if (x.includes("'")) {
					alert("Invalid Input: do NOT enter a ' character into the input field.");
					return false;
				}
			}
		</script>

	</head>

	<body>
		<!-- Form to submit -->
		<form name="page" id="page" action="annotation.php" onsubmit="return validateForm()" method="get">
		
		<!-- Input information -->
		<label for="label">Annotation:</label>
		<input name="id"></input>
		<br><br>

		<input type="submit" value="Submit Query"></input><br>
		
		</form>
	</body>
</html>
