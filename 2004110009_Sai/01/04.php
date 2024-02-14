<!DOCTYPE html>
<?php
$strArray = array('hoge', 'piyo', 'apple' => 'りんご', 'orange' => 'みかん');
?>

<html>

<head>
    <title>04</title>
</head>

<body>
    配列$strArrayの中身は以下の通りです。<br>
    <?php
    foreach ($strArray as $key => $value) {
        echo "[$key] => $value <br/>";
    }
    ?>

</body>

</html>