<?php
if(!isset($_SESSION)){
    session_start();
    }

// DBサーバのURL
$db['host'] = "localhost";
// ユーザー名
$db['user'] = "blog_user";
// ユーザー名のパスワード
$db['pass'] = "bloguser";
// データベース名
$db['dbname'] = "yigroupblog";
?>