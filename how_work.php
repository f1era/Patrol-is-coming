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

   <div class="how_block">
     
    <div class="how_block_header">
      <div class="how_block_header_text">
         <ul>
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

      <div class="how_block_main">
        <div class="how_block_main_text">
          <h2>Коротко о возможностях сервиса:</h2><br>
          <p>1. Нажми на станцию, на которой есть цифра, чтобы посмотреть или добавить информацию о патруле.</p><br>
          <p>2. Станции, на которых нет цифр, означают, что еще никто из пользователей не добавлял записей, но ты можешь нажать на неё и добавить свою.</p><br>
          <p>3. Все записи удаляются в 22:00.</p><br>
          <p>4. Аккуратней, и помоги другим. </p><br>
          <center><button onClick='location.href="main.php"'>Начать</button></center>
        </div>
      </div>

   </div>



    <!-- Script -->

    <script src="js/jq.min.js"></script>
    <script src="js/script.js?ver=1"></script>

  </body>
</html>
