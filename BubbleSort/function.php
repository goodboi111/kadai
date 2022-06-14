<?php
function hello() {
    echo "hello";
}

// 値渡し
function dispShainmeiAtai($shainmeiArray) {
    for ($i = 0; $i < count($shainmeiArray); $i++) {
        echo $shainmeiArray[$i];
        echo "<br>";
    }
}

// 参照渡し
function dispShainmeiSansyo(&$shainmeiArray) {
    for ($i = 0; $i < count($shainmeiArray); $i++) {
        echo $shainmeiArray[$i];
        echo "<br>";
    }
}

// 大文字化
function dispUpperCaseText($shainmeis) {
    $upperCaseText = strtoupper($shainmeis);
    echo $upperCaseText;
}

// バブルソート
function bubble_sort($array) {
    // 要素数回繰り返し
    for($i = 0; $i < count($array); $i++) {
        // 要素数-1回繰り返し
        for($n = 1; $n < count($array); $n++) {
            // 隣接要素を比較し大小が逆なら入替える
            if($array[$n-1] > $array[$n]) {
                $temp = $array[$n];
                $array[$n] = $array[$n-1];
                $array[$n-1] = $temp;
            }
        }
    }
    return $array;
}    
?>