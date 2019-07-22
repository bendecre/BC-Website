<!--
function unique(num1){
	document.getElementById("loaded").innerHTML = num1;
}

function selectElementContents(el) {
	var body = document.body, range, sel;
	if (document.createRange && window.getSelection) {
		range = document.createRange();
		sel = window.getSelection();
		sel.removeAllRanges();
		try {
			range.selectNodeContents(el);
			sel.addRange(range);
		} catch (e) {
			range.selectNode(el);
			sel.addRange(range);
		}
	} else if (body.createTextRange) {
		range = body.createTextRange();
		range.moveToElementText(el);
		range.select();
	}
}

function fasta(element1, element2) {
	var id1 = element1;
	var id2 = document.getElementById(element2).innerHTML;
	
	sessionStorage.setItem("sent1", id1); 
	sessionStorage.setItem("sent2", id2);
	
	window.open('fasta.php?id=' + id1, '_blank');
}

function commentSubmit(element1, element2){
	var x = document.getElementById(element1).value;
	var y = element2;
	
	window.open('submit.php?comment=' + x + '&id=' + y, '_blank');
	
}

function sortTable(n) {
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
	for (i = 2; i < (rows.length - 1); i++) {
	  //start by saying there should be no switching:
	  shouldSwitch = false;
	  /*Get the two elements you want to compare,
	  one from current row and one from the next:*/
	  x = rows[i].getElementsByTagName("TD")[n];
	  y = rows[i + 1].getElementsByTagName("TD")[n];
	  /*check if the two rows should switch place,
	  based on the direction, asc or desc:*/
	  if (dir == "asc") {
		if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
		  //if so, mark as a switch and break the loop:
		  shouldSwitch= true;
		  break;
		}
	  } else if (dir == "desc") {
		if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
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
	for (i = 2; i < (rows.length - 1); i++) {
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
-->