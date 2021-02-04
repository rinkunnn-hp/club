<h1>クレジットカードのパスワードを入力してください</h1>
<?php
 
session_start();
 
//ログイン済みかを確認
if (!isset($_SESSION['USER-f'])) {
    header('Location: /きゅうり/ログイン');
    exit;
}
?>
