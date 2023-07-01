<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>あの魂の震えるセリフを二度三度</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Dela+Gothic+One&family=Kaisei+Decol:wght@700&family=Potta+One&family=RocknRoll+One&family=Shippori+Antique+B1&family=VT323&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap" rel="stylesheet">

</head>

<body>

<div class="title1">『あの魂の<br>
    　震えるセリフを<br>
    　　　二度三度』</div>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="dialoguefield">
            <fieldset>
                <legend>あなたの魂を震わせたセリフを入れてみよう！　うろ覚えもOK！</legend>
                <label>セリフ<br><input type="text" name="dialogue"></label><br>
                <label>ページの画像（任意）<br><input type="file" name="img"></label><br>
                <label>マンガのタイトル<br><input type="text" name="email"></label><br>
                <label>コメント<br><textArea name="content" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


    

</body>

</html>
