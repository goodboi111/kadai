<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>四則演算対応に改造</title>
</head>
<body>
	<h1>四則演算対応に改造</h1>
    <?php
        $num1 = $_POST["num1"];
        $symbol = $_POST["symbol"];
        $num2 = $_POST["num2"];
        $answer = "";
        switch ($symbol) {
            case "+":
                $answer = $num1 + $num2;
                break;
            case "-":
                $answer = $num1 - $num2;
                break;
            case "*":
                $answer = $num1 * $num2;
                break;
            case "/":
                $answer = $num1 / $num2;
                break;
        };
        ?>
        <?php echo $answer; ?>
</body>
</html>
