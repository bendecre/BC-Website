<!DOCTYPE html>
	<head>
	</head>
	<body>
		<?php
			# Deleted code
			
			while($row = $result->fetch_assoc()){
				if(($id % 2) == 1){ echo '<table class="center" id="datatable" border="1">'; }
				else{ echo '<table class="center" id="datatable" border="1" <table style="background-color:#D3D3D3;">'; }
				$id = $id + 1;
				
				echo '
					<thead>
						<tr>
							<th style="width:100px;">Transcript Name</th>
							<th style="width:100px;">Scaffold</th>
							<th style="width:100px;">TPM</th>
							<th style="width:100px;">Coverage</th>
							<th style="width:100px;">E value</th>
							<th style="width:100px;">Link</th>
						</tr>
					</thead><tbody>
				';
				
				# Deleted code
			
				echo '<tr align="center">';
				echo '<td>';
				if(isset($output)){ echo $output; }
				else { echo "NULL"; }
				echo '</td>';
				
				echo '<td>';
				if(isset($output1)){ echo $output1; }
				else { echo "NULL"; }
				echo '</td>';
				
				echo '<td>';
				if(isset($output5)){ echo $output5; }
				else { echo "NULL"; }
				echo '</td>';
				
				echo '<td>';
				if(isset($output6)){ echo $output6; }
				else { echo "NULL"; }
				echo '</td>';
				
				echo '<td>';
				if(isset($output8)){ echo $output8; }
				else { echo "NULL"; }
				echo '</td>';
				
				# Jbrowse link
				echo '<td>';
				# Deleted code
				echo $output1;
				echo '%3A';
				echo $start;
				echo '..';
				echo $end;
				echo ' target=\'_blank\'>Jbrowse</a><br>';
				echo '</td>';
			
				
				echo '</tr>';
				
				
				echo '<tr><td colspan="6">';
				if(isset($output2)){ echo $output2; }
				else { echo "NULL"; }
				echo '</td></tr>';
				
				echo '<tr><td colspan="6">';
				if(isset($output3)){ echo $output3; }
				else { echo "NULL"; }
				echo '</td></tr>';
				
				echo '<tr><td colspan="6">';
				if(isset($output4)){ echo $output4; }
				else { echo "NULL"; }
				echo '</td></tr>';
				
				echo '</tbody></table>';
				#End of table code
				
				echo '<br>';
				$output1 = NULL;
			}
		?>
	</body>
</html>