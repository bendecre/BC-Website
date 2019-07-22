<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		
		<title>Bluecrab Genome | imet</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		
		<script>
			function go(loc){
				document.getElementById('page').src = loc
			}
		</script>
	</head>

	<body>
		<div class="wrapper">
			<img src="banner.png"><br>
			
			<!-- Dropdown Menu -->
			<ul>
				<!--<li class="dropdown">
						<a onclick="go('login.php')">LOGIN</a>
				</li> -->
				
				<li class="dropdown">
						<a onclick="go('about.php')">ABOUT US</a>
				</li>
				
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">SEARCH</a>
					<div class="dropdown-content">
						<a onclick="go('search.php')">Bluecrab Genome</a>
						<a onclick="go('searchSequence.php')">Sequence</a>
						<a onclick="go('searchAnnotation.php')">Annotation</a>
					</div>
				</li>
				
				<li class ="dropdown">
					<a href="javascript:void(0)" class="dropbtn">ABUNDANCE</a>
					<div class="dropdown-content">
						<a onclick="go('searchTPM.php')">Bluecrab</a>
					</div>
				</li>
				
				<li class ="dropdown">
					<a onclick="go('summary.php')" class="dropbtn">SUMMARY</a>
				</li>
				
				<li class ="dropdown">
					<a onclick="go('/blast/')" class="dropbtn">BLAST</a>
				</li>
				
				<li style="float:right; padding-right: 10px;"><font size="+3"><i>Blue Crab Genome Initiative</i></font></li>
			</ul>
			
			<!-- iframe for changing web page displayed -->
			<div class="intrinsic-container">
				<iframe id="page" src="about.php" style="border:none;"></iframe>
			</div>
			
			<img src="footer.png">
		</div>
	</body>
</html>
