<!DOCTYPE html>
<?php
$numArray = array(0, 1, 2, 4, 8, 16, 32, 64);
?>

<html>

<head>
    <title>01</title>
</head>

<body>
    <?php

    foreach ($numArray as $key => $value) {
        echo "[$key] => $value <br/>";
    }
    ?>
</body>

</html>