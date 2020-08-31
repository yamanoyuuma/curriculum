<?php
//名前
$name = "taro";
//パスワード
$password = "pass";

if ($name =="taro" && $password == "pass" ) {
    echo 'ログイン成功です';
} elseif ($name =="taro" ) {
    echo 'パスワードが間違っています。';
} elseif ($password =="pass") {
    echo '名前が間違っています。';
} else {
    echo '入力情報が間違っています';
}

echo "<br>"."1.IDE（統合開発環境）"."<br>";
echo "プログラムを作るために必要な物が全部詰まった開発環境"."<br>";

echo "2. JOIN（データベースにおいて）"."<br>";
echo "JavaScript内で複数の値をまとめる際の記法のこと シンプルで軽量...だからデータとして扱いやすく
人間にもわかる"."<br>";

echo "3.コンフリクト"."<br>";
echo "同じものを同じタイミングで使おうとして、ぶつかっちゃっている状態 競合状態"."<br>";
?>