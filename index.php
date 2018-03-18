<?php
  if ($_COOKIE["boolie"] == "true") {
    header ("Refresh: 0; url='main.php'");
  }
  else {

  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="css/style.css?ver=1">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/media_style.css?ver=1">

    <script src="js/script.js"></script>

    <title>Patrol is comings!</title>
  </head>
  <body>

   <div class="index_div">

    <div class="header_block">

      <div class="header_text">
        <ul>
          <li><a href="index.php" class="kvd1">home</a></li>
          <li><a href="how_work.php" class="kvd1">about</a></li>
          <li><a href="contact.php" class="kvd1">contacts</a></li>
          <li><a href="#" class="kvd" style="">&#9776;</a></li>
          <div class="menushka" style="display: none">
          <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="how_work.php">about</a></li>
            <li><a href="contact.php">contacts</a></li>
          </ul>
          </div>
        </ul>
      </div>
    </div>

    <div class="main_block">
      <div class="main_img">

      </div>
      <div class="main_text">
        <div class="main_text_text">
          <div class="main_text_text_header">
            <p>Патруль рядом. Аккуратнее.</p>
          </div>
          <div class="main_text_text_text">
            <p>Смотри на карте, где патруль.</p>
            <p>Добавляй на карту их местонахождение.</p>
            <p>Аккуратнее. И помоги другим.</p>
          </div>
        </div>
        <div class="main_btn">
          <span class="reg_btn">
            <button>Регистрация</button>
          </span>
          <span class="login_btn">
            <button>Вход</button>
          </span>
        </div>
      </div>
    </div>
    <div class="footer_block">
      @f1era
    </div>


  <div class="forma" style="display: none">
    <div class="form_block">
      <form class="form_block2" action='autf.php' method="post">
        <p class="p_input"><span class="span_close">X</span>&nbsp;&nbsp;|&nbsp;&nbsp;Введите свои данные: </p>
        <input class="reg_input" type="text" name='email' placeholder="Еmail адрес" maxlength="25"></input>
        <input class="login_input" type="password" name='pwd' placeholder="Ваш пароль" maxlength="8">
        <input class="btn_input" type="submit" value="Войти">
      </form>
    </div>
  </div>

  <div class="forma2" style="display: none">
    <div class="reg_block">
      <form class="regform" action='reg.php' method="post">
        <p class="reg_p"><span class="reg_close">X</span>&nbsp;&nbsp;|&nbsp;&nbsp;Введите свои данные: </p>
        <input class="rega_email" type="text" name='remail' placeholder="Еmail адрес" maxlength="25"></input>
        <input class="rega_pwd" type="password" name='rpwd' placeholder="Ваш пароль" maxlength="8">
        <input class="rega_btn" type="submit" value="Регистрация">
      </form>
    </div>
  </div>


   </div>

    <!-- Script -->

    <script src="js/jq.min.js"></script>
    <script src="js/script.js?ver=1"></script>

  </body>
</html>
