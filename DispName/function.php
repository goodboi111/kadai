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
?>