<?php
    require_once('./db.php');
    $sql = "SELECT * FROM `名簿` ORDER BY `No` ASC";
    $tpm = $dbInfo->query($sql);
    var_dump($tmp);

?>