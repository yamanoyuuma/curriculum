<?php
for ($i = 1; $i <= 100; $i++) {
    if (($i % 3 === 0) && ($i % 5 === 0)) {
        echo 'FizzBuzz!!';
        echo '<br>';
    }elseif ($i % 3 === 0) {
        echo 'Fizz!';
        echo '<br>';
    }elseif ($i % 5 === 0) {
        echo 'Buzz!';
        echo '<br>';
    }else {
        echo $i;
        echo '<br>';
    }
}

echo "<br>"."1.パフォーマンス"."<br>";
echo "性能、もしくは現在の頑張り具合のこと"."<br>";

echo "2.スロークエリ"."<br>";
echo "データベースにおいて、時間のかかっているSQL(遅いSQL)のこと"."<br>";

echo "3.クエリログ"."<br>";
echo "MySQL サーバが実行した全ての SQL クエリを出力するログ";
?>