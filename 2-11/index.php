
<form action="result.php" method="post">
名前：<input type="text" name="my_name" />
<br>
メールアドレス：<input type="text" name="my_mail" />
<br>
パスワード：<input type="password" name="password" />
<br>
<input type="submit" value="送信" />
</form>

<?php 
echo "<br>"."1.仕様書・設計書"."<br>";
echo "仕様書には「結果」が書かれています。設計書には「過程」が書かれています。
・仕様書は、それを見ても作れません。設計書は、それを見れば作れます。
・仕様書は、技術的なことを知らなくても作れます。設計書は、技術的なことを知らないと作れません。"."<br>";

echo "2.Git"."<br>";
echo "プログラムソースなどの変更履歴を管理する分散型のバージョン管理システムのこと"."<br>";

echo "3.マージツール"."<br>";
echo "複数のファイルやデータ、プログラムなどを、決められたルールに従って一つに統合すること";
?>