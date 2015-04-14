<h2 class='tbproducts'>Results Table</h2>
<?php 
		echo "<div class='tbproducts'>";
		
 	  
		echo "<table id='listResults' class='orders'>";
		echo "<tr><th>Block Number</th><th>Category</th><th>Item name</th><th>Answer q1</th><th>Answer q2</th><th>Subject ID</th><th>Gender</th><th>Age</th><th>Years in School</th><th>Years living in Canada</th><th>Grocery shopping frequency</th><th>Last shop</th>";
		
		foreach ($results as $result) {
			echo "<tr>";
			echo "<td>" .$result->block_number . "</td>";
			echo "<td>" .$result->category . "</td>";
			echo "<td>" .$result->item_title . "</td>";
			echo "<td>" .$result->answer_q1 . "</td>";	
			echo "<td>" .$result->answer_q2 . "</td>";
			
			echo "<td>" .$result->subject_id . "</td>";
			echo "<td>" .$result->gender . "</td>";
			echo "<td>" .$result->age_info . "</td>";
			echo "<td>" .$result->school_info . "</td>";
			echo "<td>" .$result->livinginfo . "</td>";
			echo "<td>" .$result->freqgroceryshopping . "</td>";
			echo "<td>" .$result->lastshop . "</td>";
		
			
			
			echo "</tr>";
		}
		echo "<table>";
		echo "</div>";
?>	
<br>
<input value="Export as CSV" type="button" onclick="$('#listResults').table2CSV({header:['Block Number','Category','Item Name','Answer q1','Answer q2','Subject ID','Gender','Age','Years in School','Years living in Canada','Grocery shopping frequency','Last shop']})">