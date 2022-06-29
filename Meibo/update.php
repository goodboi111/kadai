<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require_once('function.php');

    // データ受け取り
    $no = $_POST["no"];

    // 編集データ用配列の宣言
    $editData = [];

    // 「no」が一致した場合、多次元配列の配列の要素を取り出す
    for ($i = 0; $i < count($meiboMultiArray); $i++) {
        if ($meiboMultiArray[$i][0] === $no) {
            for ($j = 0; $j < count($meiboMultiArray[$i]); $j++) {
                $editData[$j] = $meiboMultiArray[$i][$j];
            }
        } 
    }

    // 日付データのフォーマット変更　例：2000/1/1 → 2000-01-01 
    $stringDate = new DateTime($editData[3]);
    $theDate = $stringDate->format("Y-m-d");
    $editData[3] = $theDate;
    ?>
    <h3>フォームに変更したい値を入力してください</h3>
<table>
    <tr>
        <th>No</th>
        <th>氏名</th>
        <th>ローマ字※半角英数字</th>
        <th>生年月日</th>
    </tr>
    <form action="./result.php" method="post">
        <td><input type="number" name="no" value="<?php echo $editData[0]; ?>"></td>
        <td><input type="text" name="jname" value="<?php echo $editData[1]; ?>"></td>
        <td><input type="text" name="name" value="<?php echo $editData[2]; ?>"></td>
        <td><input type="date" name="birth" value="<?php echo $editData[3]; ?>"></td>
        <td><input type="submit" value="更新" class="btn"></td>
</table>

</form>
    <a href="./index.php" style="btn">戻る</a>
</body>
</html>