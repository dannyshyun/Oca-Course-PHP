<!DOCTYPE html>
<?php
    $menuArray = array
    (
        "monday" => "うどん",
        "tuesday" => "チャーハン",
        "wednesday" => "焼きそば",
        "thursday" => "お好み焼き",
        "friday" => "ラーメン",
        "saturday" => "ハンバーグ",
    )
?>
<html>
    <header></header>

    <body>
        <?php
        foreach($menuArray as $key => $value) 
        {
            echo "$value, ";
        }
        ?>
    </body>
</html>