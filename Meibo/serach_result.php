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

    $num1 = intval($_POST["num1"]);
    $num2 = intval($_POST["num2"]);

    $results = [];

    // 
    for ($i = 0; $i < count($meiboMultiArray); $i++) {
        if ($meiboMultiArray[$i][0] >= $num1 && $meiboMultiArray[$i][0] <= $num2) {
            $results[$i] = $meiboMultiArray[$i];
            // echo "t";
        } else {
            // echo "f";
        }
    }

    var_dump($results);

?>
<table>
    <tr>
        <th>No</th>
        <th>氏名</th>
        <th>ローマ字</th>
        <th>生年月日</th>
    </tr>
<?php
        for ($i = 0; $i < count($results); $i++) {
            echo "<tr>";
            echo "<td>". str_pad($results[$i][0], 3, "0", STR_PAD_LEFT) ."</td>";
            for ($j = 1; $j < count($results[$i]); $j++) {
                echo "<td>". $results[$i][$j] ."</td>";
            }
            echo "</tr>";
        }
?>
</table>
</body>
</html>