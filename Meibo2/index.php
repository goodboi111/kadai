<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require_once('function.php');
    require_once('db.php');

	$sql = "SELECT * FROM `名簿` ORDER BY `No` ASC";
	$dbInfo->query($sql);

    $no = [];

    $i = 0;
	foreach ($dbInfo->query($sql) as $record) {
		$meiboMultiArray[$i][0] = $record["No"];
		$meiboMultiArray[$i][1] =  $record["氏名"];
		$meiboMultiArray[$i][2] =  $record["ローマ字"];
		$meiboMultiArray[$i][3] =  $record["生年月日"];
        $i++;
	};

    // 名簿(csv)用多次元配列を宣言
    // $meiboMultiArray = [
    //     []
    // ];
    // csvファイルの中身を,ごとに区切り多次元配列へ
    // for ($i = 0; $i < count($meibos); $i++) {
    //     $meiboMultiArray[$i] = explode(",", $meibos[$i]);
    // }
?>
<!-- 表示 -->
<table>
    <tr>
        <th>No</th>
        <th>氏名</th>
        <th>ローマ字</th>
        <th>生年月日</th>
    </tr>
<?php
    // for ($i = 0; $i < count($meiboMultiArray); $i++) {
    //     echo "<tr>";
    //     for ($j = 0; $j < count($meiboMultiArray[$i]); $j++) {
    //         echo "<td>". $meiboMultiArray[$i][$j] ."</td>";
    //     }
    //     echo "</tr>";
    // }

    for ($i = 0; $i < count($meiboMultiArray); $i++) {
        echo "<tr>";
        echo str_pad("<td>". str_pad($meiboMultiArray[$i][0], 3, "0", STR_PAD_LEFT) ."</td>", 3, "0");
        for ($j = 1; $j < count($meiboMultiArray[$i]); $j++) {
            echo "<td>". $meiboMultiArray[$i][$j] ."</td>";
        }
        echo "</tr>";
    }

?>
</table>
<a href="./add.php" class="btn">追加</a>
<!-- 更新 -->
<form action="./update.php" method="post">
    <select name="no" id="">
        <?php
        for ($i = 0; $i < count($meiboMultiArray); $i++) {
            echo "<option value=". $meiboMultiArray[$i][0] .">". str_pad($meiboMultiArray[$i][0], 3, "0", STR_PAD_LEFT) ."</option>";
        }
        ?>
    </select>
    <input type="submit" class="btn" value="更新">
</form>
<!-- 削除 -->
<form action="./delete.php" method="post">
    <select name="no" id="">
        <?php
        for ($i = 0; $i < count($meiboMultiArray); $i++) {
            echo "<option value=". $meiboMultiArray[$i][0] .">". str_pad($meiboMultiArray[$i][0], 3, "0", STR_PAD_LEFT) ."</option>";
        }
        ?>
    </select>
    <input type="submit" class="btn" value="削除">
</form>
</body>
</html>