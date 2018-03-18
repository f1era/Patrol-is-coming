
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
		Выход
	</div>

	<div class="textb">
<?php 
	echo "Выход из аккаунта...";
	setcookie("user", $username, time()-10*600000);
	setcookie("boolie", "false", time()-10*600000);
	header ("Refresh: 1.5; url='index.php'");
?>

	</div>
</div>

    <!-- Script -->

    <script src="js/jq.min.js"></script>
    <script src="js/script.js?ver=1"></script>

  </body>
</html>


