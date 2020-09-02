<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。

$port = array("80","22","20","21");

$lang = array("HTML","PHP","Python","JAVA",);

$command = array("select","join","insert","update");

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$port_a= $port[0];
$lang_a= $lang[0];
$command_a= $command[0];

shuffle($port);
shuffle($lang);
shuffle($command);

?>

<p style="margin-top: 70px;">お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form  action="answer.php" method="POST" >
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach( $port as $value ){ ?>
    <input type="radio" name="port" value="<?php echo $value;?>" style="margin: 0;">
    <?php echo $value;?>
    <?php } ?>
   
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach( $lang as $value ){ ?>
    <input type="radio" name="lang" value="<?php echo $value;?>" style="margin: 0;">
    <?php echo $value;?>
    <?php } ?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach( $command as $value ){ ?>
    <input type="radio" name="command" value="<?php echo $value;?>" style="margin: 0;">
    <?php echo $value;?>
    <?php } ?>
    <?php echo "<br>";?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
    <input type="hidden" name="port_a" value="<?php echo $port_a; ?>">
    <input type="hidden" name="lang_a" value="<?php echo $lang_a; ?>">
    <input type="hidden" name="command_a" value="<?php echo $command_a; ?>">
    <input type="submit" value="回答する" style="margin: 0;">
</form>

<link rel="stylesheet" href="style.css">