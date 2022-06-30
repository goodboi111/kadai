<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>フォームに入力して追加してください。</h3>
<table>
    <tr>
        <th>No</th>
        <th>氏名</th>
        <th>ローマ字※半角英数字</th>
        <th>生年月日</th>
    </tr>
    <form action="./result.php" method="post">
        <td><input type="number" name="no"></td>
        <td><input type="text" name="jname"></td>
        <td><input type="text" name="name"></td>
        <td><input type="date" name="birth"></td>
        <td><input type="submit" value="追加" class="btn"></td>
    </form>
</table>
    <a href="./index.php" class="btn">戻る</a>
</body>
</html>