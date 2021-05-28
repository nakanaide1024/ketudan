<?php

session_start();
require_once "../classes/Decide.php";
require_once "../word.php";

//不正アクセスのチェック
$token = filter_input(INPUT_POST, 'csrf_token');
//トークンがない、もしくは一致しない場合、処理を中止
if (!isset($_SESSION['csrf_token'])|| $token !== $_SESSION['csrf_token']){
  header('location: top.php');
  return;
}

unset($_SESSION['csrf_token']);

//バリデーション
if(!filter_input(INPUT_POST,'a') || !filter_input(INPUT_POST,'b')){
  $_SESSION = array('err' => '選択肢を決めかねているのか？');
  header('location: top.php');
  return;
}

//decidedメソッドでランダムの結果を作成し受け取る
$result = Decide::decided($_POST);

//送る言葉を取得
$words = new Words;
$word = $words->sendWord();

session_destroy();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="result.css?v=2">
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
          <p>君が下すべき決断は</p>
        </div>
      </div>
      <div class="result">
        <p><?php echo $result ?></p>
      </div>
      <h3>〜悩める君へ贈る言葉〜</h3>
      <div class="word">
        <?php foreach($word as $key => $value) :?>
        <p><?php echo $value. '<br>'. '<br>'. $key ?></p>
        <?php endforeach; ?>
      </div>
      <div class="return">
        <a href="top.php">もう一回悩む</a>
      </div>
    </div>
  </div>
  <div class="footer">
  ©️2021 上りだけ坂 
  </div>
</body>
</html>