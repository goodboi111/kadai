<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>BubbleSort</h2>
<h2>社員名</h2>
<?php
    require_once('function.php');

    $shainmeis = "Yamada,Tanaka,Sato,Imai";

    // 社員名を配列にする
    $shainmeiArray = array();
    $shainmeiArray = explode(",", $shainmeis);

    // ソート済み社員名用の配列を宣言
    $shainmeiSortArray = array();

    // 関数により並び替え
    $shainmeiSortArray = bubble_sort($shainmeiArray);

?>    
<!-- 表示 -->
<h3>値渡し</h3>
<?php dispShainmeiAtai($shainmeiSortArray); ?>
<h3>参照渡し</h3>
<?php dispShainmeiSansyo($shainmeiSortArray); ?>
<!-- <h3>文字列を大文字に変更</h3> -->
<?php //dispUpperCaseText($shainmeis); ?>
</body>
</html>
