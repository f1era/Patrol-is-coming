<?php 
  if ($_COOKIE["boolie"] == "true") {
  }
  else {
    header ("Refresh: 0; url='autf.php'");
  }


  if($_COOKIE['firstlogin'] == "true")
  {
    setcookie("firstlogin", "false", time()+10*600000);
    header ("Refresh: 0; url='how_work.php'");
  }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/media_style.css">

       

    <title>Patrol is comings!</title>
  </head>
  <body>
  
  <div class="gl_block">
  
    <div class="gl_header">
      <div class="gl_header_text">
          <ul>
          <li class="coordd"></li>
          <li><a href="logout.php" class="liusername kvd1">Logout: <?php echo $_COOKIE["user"]; ?></a></li>
          <li><a href="index.php" class="kvd1">home</a></li>
          <li><a href="how_work.php" class="kvd1">about</a></li>
          <li><a href="contact.php" class="kvd1">contacts</a></li>
          <li><a href="#" class="kvd" style="">&#9776;</a></li>
          <div class="menushka" style="display: none">
          <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="how_work.php">about</a></li> 
            <li><a href="contact.php">contacts</a></li>
            <li><a href="logout.php" class="liusername">Logout: <?php echo $_COOKIE["user"]; ?></a></li>
          </ul>  
          </div>
        </ul>
      </div>
    </div>
  
    <div class="gl_main">
      <div class="gl_main_metro">
        <div class="textonimg" style="display: none"><img src="img/select_station.png" alt=""></div>
        <div class="underline" style="display: none"><img src="img/underline.png" alt=""></div>
        <img class="imgg" src="img/metro_main.jpg" alt="">

        <!-- цифры на станциях  -->

        <div class="ckomen"><?php include ('counterphp/counter_for_comendana.php'); ?></div>
        <div class="cstder"><?php include ('counterphp/counter_for_stderevnja.php'); ?></div>
        <div class="ckrostr"><?php include ('counterphp/counter_for_krostov.php'); ?></div>
        <div class="cchkal"><?php include ('counterphp/counter_for_chkalov.php'); ?></div>
        <div class="csport"><?php include ('counterphp/counter_for_sportivn.php'); ?></div>
        <div class="admiralt"><?php include ('counterphp/admiralov.php'); ?></div>
        <div class="sadov"><?php include ('counterphp/counter_for_sadov.php'); ?></div>
        <div class="zvenigorod"><?php include ('counterphp/zvenigorod.php'); ?></div>
        <div class="obvkan"><?php include ('counterphp/obvkan.php'); ?></div>
        <div class="volkov"><?php include ('counterphp/volkov.php'); ?></div>
        <div class="buhare"><?php include ('counterphp/buhar.php'); ?></div>
        <div class="mezhdun"><?php include ('counterphp/mezhdu.php'); ?></div>

      </div>
    </div>

    

  </div>

  <div class="toggleinfo" >
      <div class="toggleinfo_block">

        <div class="toggleinfo_hide">
          <button class="toggle_button"></button>
        </div>

        <div class="toggleinfo_stantion">
          <div class="toggleinfo_stantion_text">
            
          </div>
        </div>
        <div class="toggleinfo_info">
          <div class="toggleinfo_info_text">
            <p>Как пользоваться сервисом? Изи:</p> 
            <p>1. Выбери станцию</p>
            <p>2. Посмотри, кто последний раз видел патруль на этой станции.</p>     
            <p>3. Добавь запись, если недавно видел их.</p>
          </div>
        </div>

        <div class="toggleinfo_input">
          <div class="toggleinfo_input_text">
            <?php include ("station_text_input.php"); ?>
            <form action="" method="POST">
              <input type="text" name="textstation" class="comment" placeholder="Ваш комментарий">
              <input type="time" name="timestation" value="00:00">
              <button class="send_button">>></button>
            </form>
          </div>
        </div>
        
      </div>

    </div>

<!-- Script -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  <script src="js/jq.min.js"></script>
  <script src="js/jquery.cookie.js"></script>
  <script src="js/script.js"></script>

  </body>
</html>