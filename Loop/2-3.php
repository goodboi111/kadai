<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>1から100までの3の倍数と3のつく数字の抽出</h1>
    <?php
    // 2-3
    $start = 1;
    $end  = 100;
    $sum = 0;

    for ($i = $start; $i <= $end; $i++) {
        if ($i % 3 == 0 || strstr($i, "3")) {
            echo $i;
            echo "<br>";
        }
    }
    ?>
</body>
</html>
