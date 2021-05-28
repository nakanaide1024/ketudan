<?php

session_start();
require_once "classes/Decide.php";

//不正アクセスのチェック
$token = filter_input(INPUT_POST, 'csrf_token');
//トークンがない、もしくは一致しない場合、処理を中止
if (!isset($_SESSION['csrf_token'])|| $token !== $_SESSION['csrf_token']){
  header('location: top.php');
  return;
}

unset($_SESSION['csrf_token']);

//decidedメソッドでランダムの結果を作成し受け取る
$result = Decide::decided($_POST);


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="result.css">
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
          <p>君がいますべきなのは</p>
        </div>
      </div>
      <div class="result">
        <p><?php echo $result ?></p>
      </div>
      <div class="word">
        <p>名言</p>
      </div>
    </div>
  </div>
  <div class="footer">
  ©️2021 上りだけ坂 
  </div>
</body>
</html>