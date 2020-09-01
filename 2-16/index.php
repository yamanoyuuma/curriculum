<?php
// index.php
$testFile = "test.txt";
$contents = "こんにちは！";
if (is_writable($testFile)) {
    // 書き込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($testFile, "w");
    // 対象のファイルに書き込む
    fwrite($fp, $contents);
    // ファイルを閉じる
    fclose($fp);
    // 書き込みした旨の表示
    echo "finish writing!!";
} else {
    // 書き込み不可のときの処理
    echo "not writable!";
    exit;
}

$test_file = "test2.txt";

if (is_readable($test_file)) {
    $fp = fopen($test_file,"r");
    while ($line = fgets($fp)) {
        echo $line.'<br>';
    }
    fclose($fp);
} else {
    echo "not readable!";
    exit;
}


echo "<br>"."1.CakePHPの2系・3系の違い"."<br>";
echo "CakePHP2はComposerでのインストールに対応していなかったことに対して、CakePHP3はComposerで簡単にインストールすることができるようになった モデル周りの構成や、DBからデータを取得する際のコードも比較的簡単になった"."<br>";

echo "2.LAMP"."<br>";
echo "・Linux
・Apache
・MySQL
・PHP で構成された環境"."<br>";

echo "3.AWS"."<br>";
echo "Amazonさんが運営している、サーバやデータベースなど、インターネットを経由して使えるあれやこれやを貸してくれるサービスのこと";

?>

