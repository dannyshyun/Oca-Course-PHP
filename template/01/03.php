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
    foreach ($strArray as $str) 
    {
            echo ''.$str.'<br>' ;
    }
    ?>

</body>

</html>