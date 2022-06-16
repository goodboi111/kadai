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
        $asortArray = array();

        $top5s = array();
        $worst5s = array();

        // 対象の数字より大きい値のみの配列を作る
        $n = 0;
        for ($i = 0; $i < count($numArray); $i++) {
            if ($numArray[$i] >= $num) {
                // echo $numArray[$i];
                // echo "<br>";
                $asortArray[$n] = $numArray[$i];
                $n++;
            }
        }

        // 降順に配列をソート
        arsort($asortArray);
        // キーの再整列
            $alignedArsortArray = array_values($asortArray);  

        // トップ5を取り出して配列へ
        for ($i = 0; $i < 5; $i++) {
            $worst5s[$i] = $alignedArsortArray[$i];
        }

        // 昇順に配列をソート
            asort($asortArray);
        // キーの再整列
            $alignedAsortArray = array_values($asortArray);

        // ワースト5を取り出して配列へ
        for ($i = 0; $i < 5; $i++) {
            $top5s[$i] = $alignedAsortArray[$i];
        }

        // var_dump($worst5s);
    ?>
    <h3>トップ5</h3>
        <?php 
            foreach ($worst5s as $worst5) {
                echo $worst5;
                echo "<br>";
            }        
        ?>
    <br>
    <h3>ワースト5</h3>
        <?php 
            foreach ($top5s as $top5) {
                echo $top5;
                echo "<br>";
            }
        ?>        
</body>
</html>