<?php 
function getRectangularVolume($depth,$width,$height) {
    $volume = $depth * $width * $height;
    print "直方体の体積は".$volume."です";
}

getRectangularVolume(5,10,8);

echo "<br>"."1.ハッシュ化"."<br>";
echo "値をハッシュ関数に入れてハッシュ値に変換すること 適当な値が返ってくる・同じ入力に対しては同じ値が返ってくる"."<br>";

echo "2.総合テスト"."<br>";
echo "作ったシステムの卒業テスト"."<br>";

echo "3.デバッグ"."<br>";
echo "バグの原因を探して取り除く作業";
?>


