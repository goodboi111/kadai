<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ある数字以上の数の抽出</h1>
    <?php
        $numArray = [
            49,58,14,38,62,96,91,60,62,19,
            81,38, 4,90, 0,12,25,33,85,45,
            86,91, 8, 4,46,22, 7,58,55, 7,
            43, 5,75,92,83,24,23,52, 9,52,
            47,80,49,85,16, 0,37, 4,41, 7,
            93,27,23,32,33,87,21,28, 3,32,
            48,86,33,51,91,77,21,28,58,10,
            45,15,46,25,90,37,37, 7, 8,17,
            18,23, 3,27,29,89,34,67,29,56,
            55,63,95,27,65,95,40,92,95,51
        ];

        $num = $_POST["num1"];
        // $t = count($numArray);
        // var_dump($t);

        for ($i = 0; $i < count($numArray); $i++) {
            if ($numArray[$i] >= $num) {
                echo $numArray[$i];
                echo "<br>";
            }
        }
    ?>
</body>
</html>