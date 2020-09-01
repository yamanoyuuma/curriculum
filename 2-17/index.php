<?php
for($i = 1; $i <= 40; $i++){
    $randomNUmbers = mt_rand(1,6);
    echo $i."回目＝".$randomNUmbers;
    echo "<br>";
    
    $creatNumber+=$randomNUmbers;
    if($creatNumber >= 40){ 
        echo "合計".$i. "回でゴールしました。";
        break;
    }
    }

echo "<br>";

$time = intval(date('H'));

if (4 <= $time && $time <= 10) {
    echo date("今はH時台です", time())."<br>";
    echo "おはようございます";
} elseif (10 <= $time && $time <= 17) {
    echo date("今はH時台です", time())."<br>"; 
    echo "こんにちは";
} else {
    echo date("今はH時台です", time())."<br>"; 
    echo "こんばんは";
}

?>
