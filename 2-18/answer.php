<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST["my_name"];

$port = $_POST["port"];
$port_a = $_POST["port_a"];

$lang = $_POST["lang"];
$lang_a = $_POST["lang_a"];

$command = $_POST["command"];
$command_a = $_POST["command_a"];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

if($port == $port_a){
    $rs = "正解！";
} else {
    $rs = "残念・・・";
}

if($lang == $lang_a){
    $rs2 = "正解！";
} else {
    $rs2 = "残念・・・";
}

if($command == $command_a){
    $rs3 = "正解！";
} else {
    $rs3 = "残念・・・";
}

?>
<p style="margin-top: 40px;"><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $rs; ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
 <?php echo $rs2; ?> 

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
 <?php echo $rs3; ?> 

<link rel="stylesheet" href="style.css">