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
				width: 100px;
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
			function sortTableNum(n) {
			  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
			  table = document.getElementById("datatable");
			  switching = true;
			  //Set the sorting direction to ascending:
			  dir = "asc"; 
			  /*Make a loop that will continue until
			  no switching has been done:*/
			  while (switching) {
				//start by saying: no switching is done:
				switching = false;
				rows = table.getElementsByTagName("TR");
				/*Loop through all table rows (except the
				first two, which contains table headers):*/
				for (i = 2; i < (rows.length - 2); i++) {
				  //start by saying there should be no switching:
				  shouldSwitch = false;
				  /*Get the two elements you want to compare,
				  one from current row and one from the next:*/
				  x = rows[i].getElementsByTagName("TD")[n];
				  y = rows[i + 1].getElementsByTagName("TD")[n];
				  /*check if the two rows should switch place,
				  based on the direction, asc or desc:*/
				  if (dir == "asc") {
					if (x.innerHTML*1 > y.innerHTML*1) {
					  //if so, mark as a switch and break the loop:
					  shouldSwitch= true;
					  break;
					}
				  } else if (dir == "desc") {
					if (x.innerHTML*1 < y.innerHTML*1) {
					  //if so, mark as a switch and break the loop:
					  shouldSwitch= true;
					  break;
					}
				  }
				}
				if (shouldSwitch) {
				  /*If a switch has been marked, make the switch
				  and mark that a switch has been done:*/
				  rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
				  switching = true;
				  //Each time a switch is done, increase this count by 1:
				  switchcount ++; 
				} else {
				  /*If no switching has been done AND the direction is "asc",
				  set the direction to "desc" and run the while loop again.*/
				  if (switchcount == 0 && dir == "asc") {
					dir = "desc";
					switching = true;
				  }
				}
			  }
			}
		</script>
	</head>
	
	<?php
		function issetor(&$var, $default = false) { return isset($var) ? $var : $default; }

		# Deleted code
		
		$mysqli->real_escape_string($data);
		$mysqli->real_escape_string($organ);
		$mysqli->real_escape_string($limit);
		$mysqli->real_escape_string($compare);
		
		# Deleted code
		
		$result = mysqli_query($con, $query);
		
		echo '
		<table class="center" id="datatable">
			<thead>
				<tr>
					<th colspan="16" style="width: 1100px;">Click any column name to sort by ascending/descending order<br><input type="button" value="Select table" onclick="selectElementContents( document.getElementById(\'datatable\') );"></th>
				</tr>
				
				<tr>
					<th onclick="sortTableNum(0)">#</th>
					<th>Seq. ID</th>
					<th onclick="sortTableNum(2)">AGC<br>Before</th>
					<th onclick="sortTableNum(3)">MG<br>Before</th>
					<th onclick="sortTableNum(4)">PGC<br>Before</th>
					<th onclick="sortTableNum(5)">AGC<br>After</th>
					<th onclick="sortTableNum(6)">MG<br>After</th>
					<th onclick="sortTableNum(7)">PGC<br>After</th>
					<th style="font-size:14px" onclick="sortTableNum(8)">Hepato- pancreas</th>
					<th onclick="sortTableNum(9)">Hemo- cytes</th>
					<th onclick="sortTableNum(10)">BCAG</th>
					<th onclick="sortTableNum(11)">BCES</th>
					<th onclick="sortTableNum(12)">BCP- LEO</th>
					<th onclick="sortTableNum(13)">BCYO</th>
					<th onclick="sortTableNum(14)">Avg</th>
					<th style="font-size:14px" onclick="sortTableNum(15)">Rank</th>
				</tr>
			</thead><tbody>
		';
	
		$id = 1;
		$sum1 = 0;
		$sum2 = 0;
		$sum3 = 0;
		$sum4 = 0;
		$sum5 = 0;
		$sum6 = 0;
		$sum7 = 0;
		$sum8 = 0;
		$sum9 = 0;
		$sum10 = 0;
		$sum11 = 0;
		$sum12 = 0;
		
		while($row = $result->fetch_assoc()){
			# Deleted code
		
			$id = $id + 1;
			
			# Deleted code
		}
		
		$average1 = $sum1/$id;
		$average2 = $sum2/$id;
		$average3 = $sum3/$id;
		$average4 = $sum4/$id;
		$average5 = $sum5/$id;
		$average6 = $sum6/$id;
		$average7 = $sum7/$id;
		$average8 = $sum8/$id;
		$average9 = $sum9/$id;
		$average10 = $sum10/$id;
		$average11 = $sum11/$id;
		$average12 = $sum12/$id;
		
		echo '
			<tr>
				<th colspan="2">Averages:</th>
				<th>'.round($average1, 2).'</th>
				<th>'.round($average2, 2).'</th>
				<th>'.round($average3, 2).'</th>
				<th>'.round($average4, 2).'</th>
				<th>'.round($average5, 2).'</th>
				<th>'.round($average6, 2).'</th>
				<th>'.round($average7, 2).'</th>
				<th>'.round($average8, 2).'</th>
				<th>'.round($average9, 2).'</th>
				<th>'.round($average10, 2).'</th>
				<th>'.round($average11, 2).'</th>
				<th>'.round($average12, 2).'</th>
			</tr>
	
			</tbody></table><br>
		';
	?>
</html>
