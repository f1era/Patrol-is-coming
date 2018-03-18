
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
		Регистрация...
	</div>

	<div class="textb">
<?php 

include('mysqlcon.php');


if(!preg_match("/^[a-zA-Z0-9]+$/",$remail))
    {
        echo "Логин может состоять только из букв английского алфавита и цифр";
        header ("Refresh: 2.5; url='index.php'");
    }
else
	{

if(strlen($rpwd) < 3 or strlen($rpwd) > 8)
    	{
    	    echo "Логин должен быть не меньше 3-х символов и не 	больше 8";
    	    header ("Refresh: 2.5; url='index.php'");
    	}
    	else
    	{
    		$result_set3 = $mysqli->query("SELECT user_name FROM users WHERE user_name = '$remail'");
			$row = $result_set3->fetch_assoc();

			


			if($conn->connect_error) {
   			 die('failed. ' . $conn->connect_error);
			}
			else{
					if(isset($row['user_name']))
					{
						echo "Пользователь с таким именем уже существует!";
						header ("Refresh: 1.5; url='index.php'");
					}
					else
					{
						$result_set4 = $mysqli->query("INSERT INTO users VALUES (NULL, '$remail', '$rpwd')");

						if ($result_set4) 
						{
							setcookie("user", $remail, time()+10*600000);
							setcookie("boolie", "true", time()+10*600000);
							setcookie("toggle", "true", time()+10*600000);
							setcookie("firstlogin", "true", time()+10*600000);
							echo $remail . ", вы успешно зарегистрированы.";
							header ("Refresh: 2; url='index.php'");
						} 
						else {
        					echo "OSHIBKA";
    					}
						
					}
				}
    	}
	}









?>
	</div>
</div>

    <!-- Script -->

    <script src="js/jq.min.js"></script>
    <script src="js/script.js?ver=1"></script>

  </body>
</html>


