<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<style>
			body { background-image: none; }
		</style>
		
		<script>
			function validateForm() {
				var x = document.forms["page"]["input_field"].value;
				var y = document.forms["page"]["input_limit"].value;
				
				if ((x.includes("'") && x.includes("--")) || (y.includes("'") && y.includes("--"))){
					alert("Invalid input: ' & --?, please enter VALID input into the input fields.");
					return false;
				}
				else if (x == "" || y == ""){
					alert("Invalid Input: Please enter something into the input fields.");
					return false;
				}
				else if (x.includes("--") || y.includes("--")){
					alert("Invalid Input: do NOT enter a -- character into the input fields.");
					return false;
				}
				else if (x.includes("'") || y.includes("'")) {
					alert("Invalid Input: do NOT enter a ' character into the input fields.");
					return false;
				}
				else if (isNaN(y) || y == 0){
					alert("Invalid Input: limit needs to be a number above 0.");
					return false;
				}
			}
		</script>
	</head>

	<body>
		<!-- Form to submit -->
		<form name="page" id="page" action="resultsFPKM.php" onsubmit="return validateForm()" method="get">
		
		<!-- Which organ to search -->
		<label for="label">Search:</label>
		<select name="pageID" id="pageID">
			<option value="IMET1">AGC before feeding</option>
			<option value="IMET2">MG before feeding</option>
			<option value="IMET3">PGC before feeding</option>
			<option value="IMET4">AGC after feeding</option>
			<option value="IMET5">MG after feeding</option>
			<option value="IMET6">PGC after feeding</option>
			<option value="IMET7">Hepatopancreas</option>
			<option value="IMET8">Hemocytes</option>
			<option value="BCAG">BCAG</option>
			<option value="BCES">BCES</option>
			<option value="BCPLEO">BCPLEO</option>
			<option value="BCYO">BCYO</option>
		</select>
		<br>
		
		<!-- Input information -->
		<label for="label">for value:</label>
		<select name="precision" id="precision">
			<option value="select_none">(none)</option>
			<option value="select_less">Less than</option>
			<option value="select_exactly">Exactly</option>
			<option value="select_greater">Greater than</option>	
		</select>
		<input name="input_field"></input>
		<br>
		
		<label for="label">limit:</label>
		<input name="input_limit"></input>
		<label for="label">entries</input>
		<br>
		
		<label for="label">Display as:</label>
		<select name="type" id="type" onchange="this.form.action=this.value;">
			<option value="resultsFPKM.php">FPKM</option>
			<option value="resultsTPM.php">TPM</option>
		</select>
		
		<br><br>
		<input type="submit" name="submit" value="Submit Query"></input><br>
		
		</form>
	</body>
</html>