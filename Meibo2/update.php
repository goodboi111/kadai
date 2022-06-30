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
    require_once('db.php');

    // データ受け取り
    $deleteNo = $_POST["no"];

    // 編集データ用配列の宣言
    $editData = [];

    $sql = "SELECT * FROM `名簿` ORDER BY `No` ASC";
	$dbInfo->query($sql);

    $i = 0;
	foreach ($dbInfo->query($sql) as $record) {
		$meiboMultiArray[$i][0] = $record["No"];
		$meiboMultiArray[$i][1] =  $record["氏名"];
		$meiboMultiArray[$i][2] =  $record["ローマ字"];
		$meiboMultiArray[$i][3] =  $record["生年月日"];
        $i++;
	};

    // var_dump($meiboMultiArray);

    // 「no」が一致した場合、多次元配列の配列の要素を取り出す
    for ($i = 0; $i < count($meiboMultiArray); $i++) {
        if ($meiboMultiArray[$i][0] === $deleteNo) {
            for ($j = 0; $j < count($meiboMultiArray[$i]); $j++) {
                $editData[$j] = $meiboMultiArray[$i][$j];
            }
        } 
    }

	// SQL（更新）の実行
	$sql = "UPDATE `名簿` SET `No`=:num, `名前`=:jname, `ローマ字`=:ename `生年月日`=:birth WHERE `No`=:num";
	$stmt = $dbInfo->prepare ( $sql );
    $stmt->bindParam ( ":num", $line[0], PDO::PARAM_STR );
    $stmt->bindParam ( ":jname", $line[1], PDO::PARAM_STR );
    $stmt->bindParam ( ":ename", $line[2], PDO::PARAM_INT );
    $stmt->bindParam ( ":birth", $line[3], PDO::PARAM_INT );
	$stmt->execute ();
	
	// 更新行の取得
	$result = $stmt->rowCount ();


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
        <input type="hidden" name="deleteNo" value="<?php echo $deleteNo; ?>">
        <td><input type="number" name="no" value="<?php echo str_pad($editData[0], 3, "0", STR_PAD_LEFT); ?>"></td>
        <td><input type="text" name="jname" value="<?php echo $editData[1]; ?>"></td>
        <td><input type="text" name="name" value="<?php echo $editData[2]; ?>"></td>
        <td><input type="date" name="birth" value="<?php echo $editData[3]; ?>"></td>
        <td><input type="submit" value="更新" class="btn"></td>
</table>

</form>
    <a href="./index.php" class="btn">戻る</a>
</body>
</html>