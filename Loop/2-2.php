<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>1から100までの偶数値のみの総和を表示</h1>
    <?php
        $start = 1;
        $end  = 100;
        $sum = 0;

        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 == 0) {
                $sum += $i;
            }
        }
        echo $sum;
    ?>
</body>
</html>

