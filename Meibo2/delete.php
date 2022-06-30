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
        require_once('db.php');        
        
        // データ受け取り
        $no = $_POST["no"];

        // 「no」が一致した多次元配列のキー(削除すべきcsvファイルの行)を取得する
        // $deleteRow = getDeleteRow($meiboMultiArray, $no);      

        // 列の削除
        // deleteRow($meibos, $deleteRow);

        // SQL（削除）の実行
        $sql = "DELETE FROM `名簿` WHERE `No`=:num";
        $stmt = $dbInfo->prepare ( $sql );
        $stmt->bindParam ( ":num", $no, PDO::PARAM_INT );
        $stmt->execute ();
        
        // 更新行の取得
        $result = $stmt->rowCount();     
    ?>
    <p>削除しました。</p>
    <a href="./index.php" class="btn">戻る</a>
</body>
</html>