<?php
function hello() {
    echo "hello";
}

// 値渡し
function dispShainmeiAtai($shainmeiArray) {
    for ($i = 0; $i < count($shainmeiArray); $i++) {
        echo bin2hex($shainmeiArray[$i]);
        echo "<br>";
    }
}

// 参照渡し
function dispShainmeiSansyo(&$shainmeiArray) {
    for ($i = 0; $i < count($shainmeiArray); $i++) {
        echo bin2hex($shainmeiArray[$i]);
        echo "<br>";
    }
}

// 表示
function showData($data) {
    echo $data;
}

// 大文字化
function dispUpperCaseText($shainmeis) {
    $upperCaseText = strtoupper($shainmeis);
    echo bin2hex($upperCaseText);
}

function strToHex() {

}

// 文字列をASCⅡに変換
function strToAsc2() {

}
?>