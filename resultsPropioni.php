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
				width: 115px;
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
		$mysqli->real_escape_string($search);
		$mysqli->real_escape_string($compare);
		
		# Deleted code
		
		$result = mysqli_query($con, $query);
		$rowcount = mysqli_num_rows($result);
		
		echo '
		<table class="center" id="datatable">
			<thead>
				<tr>
					<th colspan="16" style="width:1100px;">Results: ' . $rowcount . ' Found <br>Click any column name to sort by ascending/descending order<br><input type="button" value="Select table" onclick="selectElementContents( document.getElementById(\'datatable\') );"></th>
				</tr>
			
				<tr>
					<th onclick="sortTableNum(0)">#</th>
					<th>Seq. ID</th>
					<th onclick="sortTableNum(2)">Percent Match</th>
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
		}
		
		$average1 = $sum1/$rowcount;
		$average2 = $sum2/$rowcount;
		$average3 = $sum3/$rowcount;
		$average4 = $sum4/$rowcount;
		$average5 = $sum5/$rowcount;
		$average6 = $sum6/$rowcount;
		$average7 = $sum7/$rowcount;
		$average8 = $sum8/$rowcount;
		$average9 = $sum9/$rowcount;
		$average10 = $sum10/$rowcount;
		$average11 = $sum11/$rowcount;
		$average12 = $sum12/$rowcount;
		
		echo '
			<tr>
				<th colspan="3">Averages:</th>
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
