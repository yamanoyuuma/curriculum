<?php
$fruits = ["apple" => "といったらりんご","orange" => "といったらみかん","peach" => "といったらもも"];

foreach ($fruits as $key => $value) {
    echo $key;
    echo $value;
    echo "<br>";
}

echo "<br>"."1.トランザクション"."<br>";
echo "『ここからここまでワンセット』な処理のまとまりを表す用語。 ACID特性」と呼ばれる「原子性（Atomicity）」「一貫性（Consistency）」「独立性（Isolation）」「永続性（Durability）」の4つの特性が標準規格によって決められている。"."<br>";

echo "2.排他ロック"."<br>";
echo "自分は見ることも変更することもできる、他の人は見ることも変更することもできないようなロックのこと"."<br>";

echo "3.チューニング"."<br>";
echo "システムやプログラムなどを改良し、パフォーマンスの向上を図ること"
?>