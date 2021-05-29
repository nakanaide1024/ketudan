<?php
session_start();
require_once "../functions.php";

$err = $_SESSION['err'];

unset($_SESSION['err']);


?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="top.css">
  <title>決断</title>
</head>
<body>
  <div class="header" >
    <h2>決断</h2>
  </div>
  <div class="main">
    <div class="content">
      <div class="message">
        <div class="q">
          <?php if(!isset($err)) : ?>
          <p>何をそんなに悩んでいるんだ？</p>
          <?php else : ?>
          <p><?php echo $err?></p>
          <?php endif; ?>
        </div>
      </div>
      <div class="form">
      <form action="result.php" method="POST">
        <div class="a">
          <input type="text" name="a" value="" class="text">
        </div>
        <div class="or">
          <h2>或いは</h2>
        </div>
        <div class="b">
          <input type="text" name="b" value="" class="text">
        </div>
        <input type="hidden" name="csrf_token" value="<?php echo h(setToken()); ?>">
      </div>
      <div class="submit">
        <input type="submit" value="決断せよ" class="button">
      </div>
      </form>
    </div>
  </div>
  <div class="footer">
  ©️2021 上りだけ坂 
  </div>
</body>
</html>