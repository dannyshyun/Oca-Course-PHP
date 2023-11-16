<!DOCTYPE html>
<html>

<head></head>

<body>
    <?php
    echo ("int型チェック<br/>");
    $var = 123;
    echo ("\$varの中の値[$var]はint型" . (is_int($var) ? "です" : "ではありません") . "<br/>");

    $var = "456";
    echo ("\$varの中の値['$var']はint型" . (is_int($var) ? "です" : "ではありません") . "<br/>");

    echo ("\$varの中の値[1024]はint型" . (is_int(1024) ? "です" : "ではありません") . "<br/>");
    echo ("\$varの中の値['1024']はint型" . (is_int('1024') ? "です" : "ではありません") . "<br/>");
    echo ("\$varの中の値[1024.2048]はint型" . (is_int(1024.2048) ? "です" : "ではありません") . "<br/>");
    echo ("<br/>");

    echo ("float型チェック<br/>");
    $var = "3.14159265";
    echo ("\$varの中の値[$var]はfloat型" . (is_float($var) ? "です" : "ではありません") . "<br/>");

    $var = "3.14159265";
    echo ("\$varの中の値['$var']はfloat型" . (is_float($var) ? "です" : "ではありません") . "<br/>");

    $var = 256;
    echo ("\$varの中の値[$var]はfloat型" . (is_float($var) ? "です" : "ではありません") . "<br/>");
    echo ("<br/>");

    echo ("bool型チェック<br/>");
    $var = false;
    $str = var_export($var, true);
    echo ("\$varの中の値[$str]はbool型" . (is_bool($var) ? "です" : "ではありません") . "<br/>");

    $var = true;
    $str = var_export($var, true);
    echo ("\$varの中の値[$str]はbool型" . (is_bool($var) ? "です" : "ではありません") . "<br/>");

    $var = array(1, 2, 4);
    $str = var_export($var, true);
    echo ("\$varの中の値[$str]はbool型" . (is_bool($var) ? "です" : "ではありません") . "<br/>");
    echo ("<br/>");

    echo ("string型チェック<br/>");
    $var = "hoge";
    $str = var_export($var, true);
    echo ("\$varの中の値[$str]はstring型" . (is_string($var) ? "です" : "ではありません") . "<br/>");

    $var = 42.195;
    $str = var_export($var, true);
    echo ("\$varの中の値[$str]はstring型" . (is_string($var) ? "です" : "ではありません") . "<br/>");
    echo ("<br/>");
    
    echo ("array型チェック<br/>");
    $var = array(1, 2.35, "fuga");
    $str = implode(", ", $var);
    echo ("\$varの中の値[$str]はarray型" . (is_array($var) ? "です" : "ではありません") . "<br/>");
    
    $var = 512;
    $str = var_export($var, true);
    echo ("\$varの中の値[$str]はarray型" . (is_array($var) ? "です" : "ではありません") . "<br/>");

    $var = array();
    $str = var_export($var, true);
    echo ("\$varの中の値[$str]はarray型" . (is_array($var) ? "です" : "ではありません") . "<br/>");
    echo ("<br/>");
    
    echo ("NULL型チェック<br/>");
    $var = null;
    $str = var_export($var, true);
    echo ("\$varの中の値[$str]はNULL型のNULL" . (is_null($var) ? "です" : "ではありません") . "<br/>");
    
    $var = NULL;
    $str = var_export($var, true);
    echo ("\$varの中の値[$str]はNULL型のNULL" . (is_null($var) ? "です" : "ではありません") . "<br/>");
    
    $var = "piyo";
    $str = var_export($var, true);
    echo ("\$varの中の値[$str]はNULL型のNULL" . (is_null($var) ? "です" : "ではありません") . "<br/>");
    
    $var = 128;
    $str = var_export($var, true);
    echo ("\$varの中の値[$str]はNULL型のNULL" . ($var === null ? "です" : "ではありません") . "<br/>");
    echo ("<br/>");
    
    echo ("変数や配列の要素の存在チェック<br/>");
    $num1 = 99;
    echo ("\$num1は存在して" . (isset($num1) ? "います" : "いません") . "<br/>");
    echo ("\$num2は存在して" . (isset($num2) ? "います" : "いません") . "<br/>");
    
    $num2 = null;
    echo ("\$num2は存在して" . (isset($num2) ? "います" : "いません") . "<br/>");
    ?>
</body>

</html>