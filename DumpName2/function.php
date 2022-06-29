<?php
// 値渡し
// function dispShainmeiAtai($shainmeiArray) {
//     for ($i = 0; $i < count($shainmeiArray); $i++) {
//         echo bin2hex($shainmeiArray[$i]);
//         echo "<br>";
//     }
// }

// 参照渡し
// function dispShainmeiSansyo(&$shainmeiArray) {
//     for ($i = 0; $i < count($shainmeiArray); $i++) {
//         echo bin2hex($shainmeiArray[$i]);
//         echo "<br>";
//     }
// }

// 大文字化
// function dispUpperCaseText($shainmeis) {
//     $upperCaseText = strtoupper($shainmeis);
//     echo bin2hex($upperCaseText);
// }

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
// function showData($datas) {
//     // 配列の場合
//     if (is_array($datas)) {
//         foreach ($datas as $data) {
//             echo $data;
//             echo "<br>";
//         }
//     } else {
//     // 変数の場合
//         echo $datas;
//     }
// }

// データを16進表示
function showDataHex($datas) {
    // 配列の場合
    if (is_array($datas)) {
        foreach ($datas as $data) {
            echo strToHex($data);
            echo "<br>";
        }
    } else {
    // 変数の場合
            echo strToHex($datas);
    }
}

// 文字列を16進に変換する自作関数
function strToHex($str) {
    $hex = "";
    $i = 0;
    while ($i < mb_strlen($str)) {
        $hex .= numToHex(ord($str[$i]));
        $i++;
    }
    return $hex;
}

// 数値を16進数に変換する自作関数
function numToHex($num) {
    $result = "";
    $coef = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
    'A', 'B', 'C', 'D', 'E', 'F'];

    //0の場合
    if ($num == 0) {
        $result = 0;
    }

    // 負の場合
    $isMinus = "";
    if ($num < 0) {
        $num *= -1;
        $isMinus = true;
    }

    // 計算
    while ($num > 0) {
        $rem = floor($num % 16);
        $num = floor($num / 16);
        $result .= $coef[$rem];
    }

    // 負の場合の処理
    if ($isMinus) {
        $result .= "-";
    }

    // 値を返す
    $result = strrev($result);
    return $result;
}


?>