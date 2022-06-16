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
    $shainmeiArray = [];
    $shainmeiArray = explode(",", $shainmeis);

    // ソート済み社員名用の配列を宣言
    $shainmeiSortArray = [];

    // 関数により並び替え
    $shainmeiSortArray = bubbleSort($shainmeiArray);

?>    
<!-- 表示 -->
<h3>値渡し</h3>
<?php showData(getShainmeiAtai($shainmeiSortArray)); ?>
<h3>参照渡し</h3>
<?php showData(getShainmeiSansyo($shainmeiSortArray)); ?>
<!-- <h3>文字列を大文字に変更</h3> -->
<?php // showData(getUpperCaseText($shainmeis)); ?>
</body>
</html>
