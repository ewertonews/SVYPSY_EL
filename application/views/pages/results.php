<h2 class='tbproducts'>Results Table</h2>
<?php 
		echo "<div class='tbproducts'>";
		
 	  
		echo "<table id='listResults' class='orders'>";
		echo "<tr><th>Block Number</th><th>Item name</th><th>Answer q1</th><th>Answer q2</th>";
		
		foreach ($results as $result) {
			echo "<tr>";
			echo "<td>" .$result->block_number . "</td>";
			echo "<td>" .$result->item_title . "</td>";
			echo "<td>" .$result->answer_q1 . "</td>";	
			echo "<td>" .$result->answer_q2 . "</td>";
		
			
			
			echo "</tr>";
		}
		echo "<table>";
		echo "</div>";
?>	
<input value="Export as CSV" type="button" onclick="$('#listResults').table2CSV({header:['Block Number','Item Name','Answer q1','Answer q2']})">