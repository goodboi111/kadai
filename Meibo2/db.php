<?php
	// データベースへ接続
	$dsn = "mysql:dbname=Meibo;host=localhost;port=3306;charset=utf8";
	$user = "root";
    $password = "";
	
	try{
	$dbInfo = new PDO ($dsn, $user, $password);
	} catch (PDOException $err) {
		echo "接続エラー". $err->getMessage();
    }


	$sql = "SELECT * FROM `名簿` ORDER BY `No` ASC";
	$dbInfo->query($sql);

	foreach ($dbInfo->query($sql) as $record) {
		$no = $record["No"];
		$shimei = $record["氏名"];
		$roumaji = $record["ローマ字"];
		$seinengappi = $record["生年月日"];		
	};

	// foreach ($records as $record) {
	// 	echo $record;
	// }

?>