<!DOCTYPE html>
<?php
    $length = 10;
?>
<html>
    <header></header>

    <body>
        <?php
        for($i = 0; $i < $length; $i++) 
        {
            $j = $i * 2;
            echo "$j, ";
        }
        ?>
    </body>
</html>