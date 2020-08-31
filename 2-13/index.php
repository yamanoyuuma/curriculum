<?php
$x = 2.9;
echo ceil($x);
echo "<br>";
$x = 2.9;
echo floor($x);
echo "<br>";
$x = 2.9;
echo round($x);
echo "<br>";
echo pi();
function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
// 半径が5の円の面積の計算
echo "<br>";
circleArea(5);
echo "<br>";
echo mt_rand(1, 50);
echo "<br>";

$str = "hello";
echo strlen($str);
echo "<br>";
$str = "hello";
echo substr($str, -3, 2);
echo "<br>";
$str = "yamanoyuma";
echo str_replace("y", "Y", $str);
echo "<br>";
$str = "I am yumayamano";
echo str_replace(" ", "", $str);
echo "<br>";
$str = "あいうえおかきくけこ";
echo mb_strlen($str);
echo "<br>";

$limit_hour = 24;
$limit_minute = 05;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo "<br>";
$limit_hour = 9;
$limit_minute = 2;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo "<br>";
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;
echo "<br>";

echo "1.PostgreSQL・Oracle SQL"."<br>";
echo "PostgreSQL.Webシステムを作るときにMySQLを避けたい人がよく選ぶデータベース"."<br>"."Oracle SQL.米オラクルが開発した、「SQL（Structured Query Language：非手続き型言語）」を“手続き型”言語として拡張したプログラミング言語"."<br>";

echo "TortoiseGit・TortoiseSVN"."<br>";
echo "TortoiseGit.Gitをより扱いやすくするために開発されたWindows用ソフトウェア"."<br>"."TortoiseSVN.Subversionのクライアントフロントエンド（各種入力をユーザーから受け取り、バックエンドが使える仕様に合うようにそれを加工する役目を担う）となるソフトウェア"."<br>";

echo "3.外部設計・内部設計"."<br>";
echo "外部設計.「基本設計」のこと。要件定義と詳細設計の中継ぎ的なポジションで行う設計"."<br>"."内部設計.「詳細設計」のこと。基本設計と実際のプログラミングの中継ぎ的なポジションで行う設計。システム開発における、基本設計でざっくり考えた概要を元にして、実際のプログラムが作れるまで細かく落とし込む工程";

?>

