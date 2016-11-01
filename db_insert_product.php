<html>
<head>
	<title>Products in inventory</title>
	<style type="text/css">
		td , th
		{
			text-align: center;
			border: 1px solid black;
		}

		th
		{
			color: white;
			background-color: black;
		}

		table
		{
			border-collapse: collapse;
			border: 1px solid black;
			width: 75%;
		}
	</style>
</head>
<body>


<?php


	require('db.php');


	if (isset($_POST['description']) && isset($_POST['cost']) &&
		isset($_POST['weight']) && isset($_POST['inventory']))
	{
		
		insert_product($_POST['description'],$_POST['cost'],$_POST['weight'],$_POST['inventory']);
	}
?>



<h2>Products in the Database</h2>

<table>
<tr><th>Description</th><th>Cost</th><th>Weight</th><th>Inventory</th></tr>


<?php

		
		$SQLCmd = 'SELECT * FROM Products';	
		$results_id = query_database($SQLCmd);
		

		while ($row = $results_id->fetch_assoc())
		{
			$description = $row['productDesc'];
			$cost = $row['cost'];
			$weight = $row['weight'];
			$inventory = $row['inventory'];
			$row['productDesc'];
			print("<tr><td>$description</td><td>$cost</td><td>$weight</td><td>$inventory</td></tr>");
		}

		
?>

</table>


</body>
</html>