<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // iniファイル読み込み
    $arr = parse_ini_file('./test.ini', true);
    // var_dump($arr);
    ?>
    <?php
    // var_dump($_POST['section']);
    // var_dump($_POST['key']);

    // データ受け取り
    $section = $_POST['section'];
    $key = $_POST['key'];

    // セクション名、項目名がともに存在
    if (array_key_exists($section, $arr) && array_column($arr, $key) != null) {
        $result = $arr[$section][$key];
        echo $result;
    // セクション名が存在しない場合
    } elseif (array_key_exists($section, $arr) == false) {
        echo "存在しないセクション名です。";
    // 項目名が存在しない場合
    } elseif (array_column($arr, $key) == null) {
        echo "存在しない項目名です。"; 
    }
    ?>
</body>
</html>