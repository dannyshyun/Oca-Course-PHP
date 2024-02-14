<!DOCTYPE html>
<?php
$numArray = array(0, 1, 2, 4, 8, 16, 32, 64);
$arrayLength = count($numArray);
?>

<html>

<head>
    <title>02</title>
</head>

<body>
    配列$numArrayの中身は以下の通りです。<br>
    <?php
    for ($i = 0; $i < $arrayLength; $i++) {
        echo "[$i] => " . $numArray[$i] . "<br>";
    }
    ?>
</body>

</html>