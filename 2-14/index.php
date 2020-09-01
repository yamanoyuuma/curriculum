<?php
$animal = ["cat","dog","rabbit"];
echo count($animal);
echo "<br>";

$animal = ["cat","dog","rabbit"];
sort($animal);
var_dump($animal);
echo "<br>";

$numbers = [0.2, 35, 0.15, 67, 0.29];
sort($numbers);
var_dump($numbers);
echo "<br>";

$animal = ["cat","dog","rabbit"];
if (in_array("dog",$animal)) {
    echo "犬がいるよ！";
} else {
    echo "犬はいないよ！";
}
echo "<br>";

$animal = ["cat","dog","rabbit"];
$atstr = implode("・", $animal);
var_dump($atstr);
echo "<br>";

$animal = ["cat","dog","rabbit"];
$atstr = implode("・", $animal);
var_dump($atstr);

$re_animal = explode("・",$atstr);
var_dump($animal);

echo "<br>";

echo "1.要件定義（要求仕様書）"."<br>";
echo "お客さまの要望をまとめる工程 要件定義の結果をまとめた資料"."<br>";

echo "2.単体テスト・結合テスト"."<br>";
echo "「合体前の部品は、それぞれちゃんと動く？」を確認するテスト"."<br>"."合体してちゃんと動くかを確かめるテスト"."<br>";

echo "3.テスト仕様書";
echo "どんな条件の元でどんなテストをするか洗い出してまとめたもの……をファイルや紙にした資料のこと"."<br>"."１・どんな条件の元で
２・どんなデータを入れると
３・どんな処理がされて
４・どんな結果になるはず
５・その結果から何が確認できる";
?>