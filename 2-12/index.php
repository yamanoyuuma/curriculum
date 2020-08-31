<form action="result.php" method="post">
    <!-- この中にinputタグを記述していきます。 --> 
    お名前：<input type="text" name="my_name" />
    <br>
    ご希望商品：
    <input type="radio" name="product" value="A賞">A賞
    <input type="radio" name="produvt" value="B賞">B賞
    <input type="radio" name="produvt" value="C賞">C賞
    <br>
    個数：
    <select name="number">
        <?php for ($i=1;$i<=10;$i++){ ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>
            </option>
        <?php } ?>
    </select>
    <br>
    <input type="submit" value="申込" />
</form>

<?php
echo "<br>"."1.モジュール"."<br>";
echo "部品"."<br>";

echo "2.バージョン管理システム"."<br>";
echo "ファイルの変更履歴を管理してくれるシステムのこと"."<br>";

echo "3.サブクエリ"."<br>";
echo "SQL文を入れ子にする（SQL文の結果を使ったSQL文にする）こと、もしくは、SQL文を入れ子にしたSQL文における中に書いてある方のSQL文のこと";
?>