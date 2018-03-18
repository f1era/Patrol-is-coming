
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css?ver=1">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/media_style.css?ver=1">

    <script src="js/script.js"></script>

    <title>Patrol is comings!</title>
  </head>
  <body>

<div class="auth_block">
	<div class="headerb">
		Авторизация
	</div>

	<div class="textb">
<?php 

include('mysqlcon.php');

$result_set = $mysqli->query("SELECT * FROM  `users` ");

if($conn->connect_error) {
    die('failed. ' . $conn->connect_error);
}
else{

	while (($row = $result_set->fetch_assoc()) != false) {
			if ($email_input == $row['user_name'] && $pwd_input == $row['user_pwd']) {
				$username = $row['user_name'];
				$userbool = true;

				setcookie("user", $username, time()+10*600000);
				setcookie("boolie", "true", time()+10*600000);
				setcookie("toggle", "true", time()+10*600000);
				setcookie("firstlogin", "true", time()+10*600000);
			}
	}

	if($userbool == true)
	{
		echo "Привет, " . $username . ".<br>";
		header ("Refresh: 1.5; url='main.php'");
	}
	else
	{
			echo "Не существует пары логин/пароль! Авторизуйтесь 	заново.";
			header ("Refresh: 1.5; url='index.php'");
		
	}

	//
}

$conn->close();

?>
	</div>
</div>

    <!-- Script -->

    <script src="js/jq.min.js"></script>
    <script src="js/script.js?ver=1"></script>

  </body>
</html>


