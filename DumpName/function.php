<?php
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

// 大文字化
function dispUpperCaseText($shainmeis) {
    $upperCaseText = strtoupper($shainmeis);
    echo bin2hex($upperCaseText);
}

// ↓↓↓表示用関数と分離
// 値渡し
function getShainmeiAtai($shainmeiArray) {
    for ($i = 0; $i < count($shainmeiArray); $i++) {
        $array[$i] = $shainmeiArray[$i];
    }
    return $array;
}

// 参照渡し
function getShainmeiSansyo(&$shainmeiArray) {
    for ($i = 0; $i < count($shainmeiArray); $i++) {
        $array[$i] = $shainmeiArray[$i];
    }
    return $array;
}

// 大文字化
function getUpperCaseText($shainmeis) {
    $upperCaseText = strtoupper($shainmeis);
    return $upperCaseText;
}

// データを表示
function showData($datas) {
    // 配列の場合
    if (is_array($datas)) {
        foreach ($datas as $data) {
            echo $data;
            echo "<br>";
        }
    } else {
    // 変数の場合
        echo $datas;
    }
}

// データを16進表示
function showDataHex($datas) {
    // 配列の場合
    if (is_array($datas)) {
        foreach ($datas as $data) {
            echo bin2hex($data);
            echo "<br>";
        }
    } else {
    // 変数の場合
        echo bin2hex($datas);
    }
}
?>