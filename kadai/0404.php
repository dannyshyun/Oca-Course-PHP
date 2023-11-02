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
            echo "$key => $value <br/>";
        }
        echo "<br/>要素追加<br/>";
        $menuArray["sunday"] = "寿司";
        foreach($menuArray as $key => $value) 
        {
            echo "$key => $value <br/>";
        }
        ?>
    </body>
</html>