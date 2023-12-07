<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    //-------------------------------<br>
    //int型への変換<br>
    //-------------------------------<br>"
    <?php
    echo ("(int)1.234 => " . var_export((int)1.234, true) . "<br/>");

    $val = 987.654;
    echo ("(int)$val => " . var_export((int)$val, true) . "<br/>");

    $val = "456.789";
    $org = var_export($val, true);
    echo ("(int)$org => " . var_export((int)$val, true) . "<br/>");

    echo ("(int)'hoge' => " . var_export((int)'hoge', true) . "<br/>");

    echo ("(int)'123fuga' => " . var_export((int)'123fuga', true) . "<br/>");

    echo ("(int)'456.789piyo999' => " . var_export((int)'456.789piyo999', true) . "<br/>");
    ?>
    <br />
    //-------------------------------<br>
    //float型への変換<br>
    //-------------------------------<br>"
    <?php
    echo ("(float)123 => " . var_export((float)123, true) . "<br/>");

    $val = -999;
    echo ("(float)$val => " . var_export((float)$val, true) . "<br/>");

    echo ("(float)'456' => " . var_export((float)'456', true) . "<br/>");

    $val = "987.654";
    $org = var_export($val, true);
    echo ("(float)$org => " . var_export((float)$val, true) . "<br/>");

    echo ("(float)'hoge' => " . var_export((float)'hoge', true) . "<br/>");

    echo ("(float)'123fuga' => " . var_export((float)'123fuga', true) . "<br/>");

    echo ("(float)'456.789piyo999' => " . var_export((float)'456.789piyo999', true) . "<br/>");
    ?>
    <br />
    //-------------------------------<br>
    //string型への変換<br>
    //-------------------------------<br>"
    <?php
    echo "(string)1234 => " . var_export((string)1234, true) . "<br/>";

    $val = 1024.2048;
    $org = var_export($val, true);
    echo "(string)$org => " . var_export((string)$val, true) . "<br/>";

    echo "(string)true => " . var_export((string)true, true) . "<br/>";
    echo "(string)false => " . var_export((string)false, true) . "<br/>";
    echo "(string)null => " . var_export((string)null, true) . "<br/>";

    ?>
    <br />
    //-------------------------------<br>
    //その他の変換<br>
    //-------------------------------<br>"
    <?php
        $val = array(1, 2, 4, 8, 'hoge');
        $org = var_export($val, true);
        echo "(string)$org". var_export($val, true) . "<br/>";
    ?>
</body>

</html>