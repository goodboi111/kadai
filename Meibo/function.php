<?php 
// 読み込み関係
// csv読み込み
$meibos = file('./Meibo.csv');
// 文字化け避け処理
mb_convert_variables("UTF-8", "SJIS", $meibos);

// 名簿(csv)用多次元配列を宣言
$meiboMultiArray = [
    []
];
// csvファイルの中身を,ごとに区切り多次元配列へ
for ($i = 0; $i < count($meibos); $i++) {
    $meiboMultiArray[$i] = explode(",", $meibos[$i]);
}

// 社員番号順にソート
$meiboMultiArray = bubbleSort($meiboMultiArray);


// 削除関係
// 削除すべき行の取得
function getDeleteRow($MultiArray, $no) {
    $deleteRow = "";
    for ($i = 0; $i < count($MultiArray); $i++) {
        if ($MultiArray[$i][0] === $no) {
            $deleteRow = $i;
        }
    }
    return $deleteRow;
}
// 行の削除
function deleteRow($array, $deleteRow) {
    // 行の削除
    unset($array[$deleteRow]);
    // 文字化け避け
    mb_convert_variables("SJIS", "UTF-8", $array);
    // 書き込み
    file_put_contents('./Meibo.csv', $array);
}

// バブルソート
function bubbleSort($array) {
    for ($i = 0; $i < count($array); $i++) {
        for ($n = 1; $n < count($array); $n++) {
            if ($array[$n-1] > $array[$n]) {
                $temp = $array[$n];
                $array[$n] = $array[$n-1];
                $array[$n-1] = $temp;
            }
        }
    }
    return $array;
}

// 
function getShainmei($shainmeiArray) {
    for ($i = 0; $i < count($shainmeiArray); $i++) {
        $array[$i] = $shainmeiArray[$i];
    }
    return $array;
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
?>