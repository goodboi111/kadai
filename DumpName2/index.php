<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>DumbName2 16進変換関数を自作</h2>
<h2>カンマ区切りの社員名を配列にして関数に渡して社員名を一人ずつ表示</h2>
<?php
    require_once('function.php');

    $shainmeis = "Yamada,Tanaka,Sato,Imai";

    //社員名を配列にする
    $shainmeiArray = [];
    $shainmeiArray = explode(",", $shainmeis);

    $str = "Yamada,Tanaka,Sato,Imai";
?>
<!-- 表示 -->
<h3>値渡し</h3>
<?php showDataHex(getShainmeiAtai($shainmeiArray)); ?>
<h3>参照渡し</h3>
<?php showDataHex(getShainmeiSansyo($shainmeiArray)); ?>
<h3>文字列を大文字に変更</h3>
<?php showDataHex(getUpperCaseText($shainmeis)); ?>
</body>
</html>
