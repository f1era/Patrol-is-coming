<?php

	include ('mysqlcon.php');

	$counter_station = 0;

	$volkov = 0;

	$result_set = $mysqli->query("SELECT * FROM  `stations` ");

	if($conn->connect_error) {
		die('failed. ' . $conn->connect_error);
	}
	else{
		while (($row = $result_set->fetch_assoc()) != false) {
			if($row["name_station"] == "volkov")
			{
				$volkov += 1;
			}
		}
		if($volkov > 0)
		{
			echo $volkov . "!";
		}
	}

?>
