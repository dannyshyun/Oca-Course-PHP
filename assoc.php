<!DOCTYPE php>
<?php
    $array = array
    (
        "first" => 1,
        "second" => 2,
        3 => "third",
        4 => "fourth",
        "五番目" => "fifth"
    );
    $array['sixth'] = "六番目";
    $array[] = "Hoge";
    
    $length = count($array);
?>
<html>
    <header></header>

    <body>
        <?php
        foreach ($array as $key => $value) 
        {
            if(array_key_exists($key, $array))
            echo "\$array[$key] => $value <br/>";
        }
        ?>
    </body>
</html>