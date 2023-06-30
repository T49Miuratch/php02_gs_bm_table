<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）

//0.　scriptが実行されずに文字列で表示される（XSS対策セキュリティ）

function h($str) {
return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
} 
?>