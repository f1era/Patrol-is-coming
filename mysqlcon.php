<?php

	$email_input = $_POST['email'];
	$pwd_input = $_POST['pwd'];

	$remail = $_POST['remail'];
	$rpwd = $_POST['rpwd'];

	$server = "localhost";
	$user = "root";
	$pwd = "0505";
	$dbname = "workf1era";

	$userbool = false;
	$username = '';

	$mysqli = new mysqli($server, $user, $pwd, $dbname);
	$mysqli->query ("SET NAMES 'utf8'");

?>