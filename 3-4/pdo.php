<?php
try{
    $db = new PDO('mysql:dbname=checktest4;host=localhost;charset=utf8','root','root');
}catch(PDOTException $e){
    echo 'DB接続エラー:'.$e->getMessage();
}
?>