
<?php 
$color = ["red" => "赤","blue" => "青","green" => "緑"];
var_dump($color);
echo "<br>";
$color["yellow"] = "黄色";
var_dump($color);

echo "<br>"."1.プルリクエスト（マージリクエスト）"."<br>";
echo "コードの変更をレビュワーに通知し、マージを依頼する機能 コードのレビューを受けることで、1人で作ると気がつかないコードの指摘やバグや記述ミスの発見ができ、コードの品質を高める"."<br>";

echo "2.Git Flow"."<br>";
echo "Gitの機能であるブランチを活用したGitの開発手法 それぞれ役割が振られているmaster, release, develop, feature, hot-fixの5つのブランチを使い分けて、開発を進める"."<br>";

echo "3.CRON"."<br>";
echo "UNIX系のOS（MacやLinux）に入っているプログラムのひとつ 指示した時間に指定したプログラムを動かす"
?>