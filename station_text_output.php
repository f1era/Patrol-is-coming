<?php

	include ('mysqlcon.php');

	$result_set = $mysqli->query("SELECT * FROM  `stations` ");

	if($conn->connect_error) {
		die('failed. ' . $conn->connect_error);
	}
	else{
		while (($row = $result_set->fetch_assoc()) != false) {
			if ($_COOKIE["coostat"] == $row["name_station"] ) {
				
				echo "<p>".$row["time_station"]." > ".$row["user_station"] . " >> " .$row["text_station"]."<br>";
			}
			else
			{

			}
		}
	}

?>