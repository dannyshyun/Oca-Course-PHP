<!DOCTYPE html>
<?php
    $numArray = array(2, 4, 8, 16);
?>
<html>
    <header></header>

    <body>
        <?php
        foreach($numArray as $key => $value) 
        {
            echo "$value, ";
        }
        ?>
    </body>
</html>