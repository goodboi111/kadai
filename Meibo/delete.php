<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 読み込み
        require_once('function.php');
        
        // データ受け取り
        $no = $_POST["no"];

        // 「no」が一致した多次元配列のキー(削除すべきcsvファイルの行)を取得する
        $deleteRow = getDeleteRow($meiboMultiArray, $no);      

        // 列の削除
        deleteRow($meibos, $deleteRow);
    ?>
    <p>削除しました。</p>
    <a href="./index.php" style="btn">戻る</a>
</body>
</html>