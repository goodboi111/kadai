<!DOCTYPE html>
 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>簡易電卓</title>
 
 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
 
        $operation = $_POST['r1'];
 
        if ($operation === "+") {
            $add = $num1 + $num2;
            echo ("足し算の結果: " . $add);
        } else if ($operation === "-") {
            $sub = $num1 - $num2;
            echo ("引き算の結果: " . $sub);
        } else if ($operation === "×") {
            $mul = $num1 * $num2;
            echo ("掛け算の結果: " . $mul);
        } else if ($operation === "÷") {
             $div = $num1 / $num2;
            echo ("割り算の結果: " . $div);
            }
        ?>
    </body>
</html>
