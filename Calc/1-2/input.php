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
		<form action="result.php" method="post">
			<label>数字1</label>
			<input type="text" name="num1">
			<label>記号</label>
			<select name="symbol">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">×</option>
			<option value="/">÷</option>
      		</select>
			<label>数字2</label>
			<input type="text" name="num2">
			<input type="submit" class="btn" value="送信">
		</form>
</body>
</html>