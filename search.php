<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<style>
			body { background-image: none; }
		</style>
		
		<script language="javascript" type="text/javascript">
			function dynamicdropdown(listindex)
			{
				// Three loops to clear out the drop down elements each time.
				var select = document.getElementById("searchterm");
				var length = select.options.length;
				for (i = 0; i < length; i++) {
				  select.options[i] = null;
				}
				
				var select = document.getElementById("precision");
				var length = select.options.length;
				for (i = 0; i < length; i++) {
				  select.options[i] = null;
				}
				
				var select = document.getElementById("operator");
				var length = select.options.length;
				for (i = 0; i < length; i++) {
				  select.options[i] = null;
				}
				
				// Switch to decide what information needs to be displayed based on which table you want to search.
				switch (listindex){
					case "resultsDrosophila.php" :
						document.getElementById("precision").options[0]=new Option("(none)","select_none");
						document.getElementById("precision").options[1]=new Option("Containing","select_like");
						document.getElementById("precision").options[2]=new Option("Exactly","select_exactly");
						
						document.getElementById("searchterm").options[0]=new Option("Annotation","select_genome_name");
						document.getElementById("searchterm").options[1]=new Option("GO Term","select_go_term");
						document.getElementById("searchterm").options[2]=new Option("Sequence Name","select_sequence_name");
						
						document.getElementById("operator").options[0]=new Option("(none)","select_none");
						document.getElementById("operator").options[1]=new Option("AND","select_and");
						document.getElementById("operator").options[2]=new Option("OR","select_or");
						break;
					case "resultsPropioni.php" :
						document.getElementById("precision").options[0]=new Option("(none)","select_none");
						document.getElementById("precision").options[1]=new Option("Less than","select_less");
						document.getElementById("precision").options[2]=new Option("Exactly","select_exactly");
						document.getElementById("precision").options[3]=new Option("Greater than","select_greater");
						
						document.getElementById("searchterm").options[0]=new Option("Percent Identity","select_identity");	

						document.getElementById("operator").options[0]=new Option("(none)","select_none");					
						break;
					case "resultsMito.php" :
						document.getElementById("precision").options[0]=new Option("(none)","select_none");
						document.getElementById("precision").options[1]=new Option("Less than","select_less");
						document.getElementById("precision").options[2]=new Option("Exactly","select_exactly");
						document.getElementById("precision").options[3]=new Option("Greater than","select_greater");
						
						document.getElementById("searchterm").options[0]=new Option("Percent Identity","select_identity");

						document.getElementById("operator").options[0]=new Option("(none)","select_none");					
						break;
					case "resultsPenmon.php" :
						document.getElementById("precision").options[0]=new Option("(none)","select_none");
						document.getElementById("precision").options[1]=new Option("Containing","select_like");
						document.getElementById("precision").options[2]=new Option("Exactly","select_exactly");
						
						document.getElementById("searchterm").options[0]=new Option("Annotation","select_genome_name");	

						document.getElementById("operator").options[0]=new Option("(none)","select_none");
						document.getElementById("operator").options[1]=new Option("AND","select_and");
						document.getElementById("operator").options[2]=new Option("OR","select_or");			
						break;
					case "resultsRPS.php" :
						document.getElementById("precision").options[0]=new Option("(none)","select_none");
						document.getElementById("precision").options[1]=new Option("Containing","select_like");
						document.getElementById("precision").options[2]=new Option("Exactly","select_exactly");
						
						document.getElementById("searchterm").options[0]=new Option("Annotation","select_genome_name");
						
						document.getElementById("operator").options[0]=new Option("(none)","select_none");
						break;
					case "resultsGoSeq.php" :
						document.getElementById("precision").options[0]=new Option("(none)","select_none");
						document.getElementById("precision").options[1]=new Option("Containing","select_like");
						document.getElementById("precision").options[2]=new Option("Exactly","select_exactly");
						
						document.getElementById("searchterm").options[0]=new Option("Annotation","select_genome_name");
						document.getElementById("searchterm").options[1]=new Option("GO Term","select_go_term");
						
						document.getElementById("operator").options[0]=new Option("(none)","select_none");
						document.getElementById("operator").options[1]=new Option("AND","select_and");
						document.getElementById("operator").options[2]=new Option("OR","select_or");
						break;
					case "resultsGecarcinus.php" :
						document.getElementById("precision").options[0]=new Option("(none)","select_none");
						document.getElementById("precision").options[1]=new Option("Containing","select_like");
						document.getElementById("precision").options[2]=new Option("Exactly","select_exactly");
						
						document.getElementById("searchterm").options[0]=new Option("Annotation","select_genome_name");
						document.getElementById("searchterm").options[1]=new Option("GO Term","select_go_term");
						document.getElementById("searchterm").options[2]=new Option("Sequence Name","select_sequence_name");
						
						document.getElementById("operator").options[0]=new Option("(none)","select_none");
						document.getElementById("operator").options[1]=new Option("AND","select_and");
						document.getElementById("operator").options[2]=new Option("OR","select_or");
						break;
				}

				return true;
			}
			
			// Making sure no one sends bad things to the MySQL server.			
			function validateForm() {
				var x = document.forms["page"]["input_field"].value;
				
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
		<form name="page" id="page" action="resultsDrosophila.php" onsubmit="return validateForm()" method="get">
		
		<!-- Which table you want to search -->
		<label for="label">Search:</label>
		<select name="pageID" id="pageID" onchange="this.form.action=this.value; javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
			<option value="resultsDrosophila.php">Drosophila</option>
			<option value="resultsPropioni.php">Propioni</option>
			<option value="resultsMito.php">Mitochondria</option>
			<option value="resultsPenmon.php">Penaeus monodon</option>
			<option value="resultsRPS.php">Conserved Domains</option>
			<option value="resultsGoSeq.php">Go by Sequence</option>
			<option value="resultsGecarcinus.php">Gecarcinus Lateralis</option>
		</select>
		<br>
		
		<!-- Input information -->
		<label for="label">for:</label>
		<select name="precision" id="precision">
			<option value="select_none">(none)</option>
			<option value="select_like">Containing</option>
			<option value="select_exactly">Exactly</option>
		</select>
		<input name="input_field"></input>
		<br>
		
		<!-- If you want to search for more than one thing -->
		<select name="operator" id="operator">
			<option value="select_none">(none)</option>
			<option value="select_and">AND</option>
			<option value="select_or">OR</option>
		</select>
		<input name="input_field2"></input>
		<br>
		
		<!-- What to search for -->
		<label for="label">as:</label>
		<select name="searchterm" id="searchterm">
			<option value="select_genome_name">Annotation</option>
			<option value="select_go_term">GO Term</option>
			<option value="select_sequence">Sequence Name</option>
		</select>
		<br><br>

		<input type="submit" name="submit" value="Submit Query"></input><br>
		
		</form>
	</body>
</html>
