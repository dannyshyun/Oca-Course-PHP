<!DOCTYPE html>
<?php
$strArray = array('hoge', 'piyo', 'apple' => 'りんご', 'orange' => 'みかん');
?>

<html>

<head>
    <title>01</title>
</head>

<body>


    <?php
    foreach($strArray as $key => $value)
    {
        echo "[$key] => $value <br/>";
    }
    ?>

</body>

</html>