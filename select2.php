<?php

// funcs.phpを読み込む
require_once('funcs.php');

//1.  DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db2;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM manga_an_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>";

    $view .= "<h2>" . "「" . h($result['dialogue']) . "」" .  "</h2>";//メインコンテンツのセリフの記述

    $view .= h($result['manga']) . "|" . h($result['source']) . "|" ;//マンガタイトル＋出典を併記

    $view .= h($result['comment']);//登録者のコメント
    
    $view .= "<h5>" . h($result['date']) . "</h5>";//登録日時（小さく）

    $view .= "</p>";
  }

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>あの魂の震えるセリフを二度三度</title>
<link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Dela+Gothic+One&family=Kaisei+Decol:wght@700&family=Potta+One&family=RocknRoll+One&family=Shippori+Antique+B1&family=VT323&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<h3>Manga Dialogue Archive</h3>
<div class="title1">『あの魂の震えるセリフを二度三度』</div>


    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="dialoguefield">
            <fieldset>
                <legend>あなたの魂を震わせたセリフを入れてみよう！　うろ覚えもOK！</legend>

                <label>セリフ：<br><textArea name="dialogue" rows="4" cols="20"></textArea></label><br>

                <label>マンガのタイトル：<br><input type="text" name="manga"></label><br>

                <label>出典巻数・ページ数（任意）：<br><input type="text" name="source"></label><br>

                <label>コメント（任意）：<br><textArea name="comment" rows="4" cols="20"></textArea></label><br>

                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->



<!-- Head[Start] -->
<header>
<!-- <div class="title1">
      <a class="navbar-brand" href="index.php">データ登録</a>
</div> -->
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
<?= $view ?>
</div>
<!-- Main[End] -->

</body>
</html>
