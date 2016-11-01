<?php

	function query_database($SQLCmd)
	{

		$mysqli = new mysqli('localhost', 'root', 'root', 'myfirstdb');
		$results_id = $mysqli->query($SQLCmd);
		$mysqli->close();
		return $results_id;
	}

	function insert_product($description,$cost,$weight,$inventory)
	{

		$SQLCmd = "INSERT INTO Products VALUES(NULL, '$description', $cost, $weight, $inventory)";
		query_database($SQLCmd); //ajouter
		print("<h2>Executed SQL Command: </h2>$SQLCmd<br><br>");		

	}
?>

