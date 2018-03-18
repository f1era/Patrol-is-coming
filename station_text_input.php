<?php

$textst = $_POST["textstation"];
$timest = $_POST["timestation"];
$cookeistat = $_COOKIE["coostat"];
$userstat = $_COOKIE["user"];

if (isset($textst) && isset($timest)) {

	include ('mysqlcon.php');

	if($textst == "")
	{
		$textst = "*без комментария*";
	}
	if($timest == "00:00" || $timest == "" || $timest == "00:" || $timest == ":00" || $timest == "0:0" || $timest == "0:00" || $timest == "00:0" || $timest == "0:" || $timest == ":0" )
	{
		$timest = date("H:i");
	}


	$result_set = $mysqli->query("INSERT INTO stations VALUES (NULL, '$cookeistat', '$textst', '$userstat', '$timest')");

	if ($result_set) {
        header ("Refresh: 0; url='main.php'");
    } else {
        
    }

}

?>