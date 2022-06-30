<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        require_once('function.php');
        // 更新の際の処理
        // 更新前の行を削除
        $deleteRow = "";
        $deleteNo = $_POST["deleteNo"];
        // 受け取った社員番号と一致する値を持つかどうか判定
        for ($i = 0; $i < count($meiboMultiArray); $i++) {
            if ($meiboMultiArray[$i][0] === $deleteNo) {
                $deleteRow = $i;
            } 
        }
        // 更新前の行を削除
        deleteRow($meibos, $deleteRow);

        // 受け取ったデータを配列へ
        $line = [];
        $line[0] = intval($_POST["no"]);
        $line[1] = $_POST["jname"];
        $line[2] = $_POST["name"];
        $line[3] = $_POST["birth"];

        // フォーマット変更　例:001 → 1
        $line[0] = intval($line[0]);

        // 日付データのフォーマット変更　例：2000-01-01 → 2000/1/1
        $theDate = new DateTime($line[3]);
        $stringDate = $theDate->format("Y/n/j");
        $line[3] = $stringDate;

        // csvファイルの中身を,ごとに区切り多次元配列へ
        for ($i = 0; $i < count($meibos); $i++) {
            $meiboMultiArray[$i] = explode(",", $meibos[$i]);
        }

        // 配列を,で区切り文字列変数へ
        $add = implode(",", $line);

        // 文字化け避け処理
        mb_convert_variables("SJIS", "UTF-8", $add);
        // CSVへの書き込み処理
        $fp = './Meibo.csv';        
        file_put_contents($fp, $add ."\n", FILE_APPEND | LOCK_EX);
    ?>
    <a href="./index.php" class="btn">戻る</a>
</head>
<body>
    
</body>
</html>