<!DOCTYPE html>
<html>

<head>
    <title>strCompare</title>
</head>

<body style="white-space: nowrap;">
    /**-------------------------------------------<br>
    <font color="red" face="Arial">
        /*@ strstr<br>
    </font>
    **/-------------------------------------------<br>
    <?php
    // 検索対象文字列
    $haystack = "abcdefg";
    // 検索文字列
    $needle = "cd";
    // 検索結果
    $result = null;
    // 検索
    $result = strstr($haystack, $needle);
    // 検索結果の表示
    echo ("'$haystack'から'$needle'を検索<br>");
    $strResult = var_export($result, true);
    echo ("結果: $strResult<br>");
    echo ("<br>");
    //-----------------------------------------
    $haystack = "abcdefg";
    $needle = "xyz";
    $result = strstr($haystack, $needle);

    echo ("'$haystack'から'$needle'を検索<br>");
    $strResult = var_export($result, true);
    echo ("結果: $strResult<br>");
    echo ("<br>");
    //-----------------------------------------
    $haystack = "abcdefg";
    $needle = "de";
    $result = strstr($haystack, $needle, true);

    echo ("'$haystack'から'$needle'を検索<br>");
    $strResult = var_export($result, true);
    echo ("結果: $strResult<br>");
    echo ("<br>");
    ?>
    /**-------------------------------------------<br>
    <font color="red" face="Arial">
        /*@ strpos<br>
    </font>
    **/-------------------------------------------<br>
    <?php
    // 検索対象文字列
    $haystack = "abcdefg";
    // 検索文字列
    $needle = "cd";
    // 検索開始位置
    $offset = -6;
    // 検索結果
    $result = null;
    // 検索
    $result = strpos($haystack, $needle, $offset);
    // 検索結果の表示
    echo ("'$haystack'から'$needle'を検索<br>");
    $strResult = var_export($result, true);
    echo ("結果: $strResult<br>");
    echo ("<br>");
    //--------------------------------------------------
    $argArray = array(
        array("abcdefgh", "cd", +0),
        array("abcdefgh", "xyz", 0),
        array("abcdefgh", "de", +3),
        array("hogehoge", "ho", -1),
        array("hogehoge", "ge", -5),
        array("hogehoge", "fu", -2)
    );
    foreach ($argArray as $arg) {
        // 検索対象文字列
        $haystack =  $arg[0];
        // 検索文字列
        $needle = $arg[1];
        // 検索開始位置
        $offset = $arg[2];
        // 検索結果
        $result = null;
        // 検索
        $result = strpos($haystack, $needle, $offset);
        // 検索結果の表示
        echo ("'$haystack'から'$needle'を'$offset'から検索<br>");
        $strResult = var_export($result, true);
        echo ("結果: $strResult<br>");
        echo ("<br>");
    }
    ?>
    /**-------------------------------------------<br>
    /*
    <font color="red" face="Arial">
        @ str_contains<br>
    </font>
    **/-------------------------------------------<br>
    <?php
    $argArray = array(
        array("hogehoge", "hoge"),
        array("hogehoge", "piyo"),
        array("hogefuga", "ga"),
        array("hogefuga", "ho")
    );
    foreach ($argArray as $arg) {
        // 検索対象文字列
        $haystack =  $arg[0];
        // 検索文字列
        $needle = $arg[1];
        // 検索結果
        $result = null;
        // 検索
        $result = str_contains($haystack, $needle);
        // 検索結果の表示
        echo ("'$haystack'から'$needle'を検索<br>");
        $strResult = var_export($result, true);
        echo ("結果: $strResult<br>");
        echo ("<br>");
    }
    ?>
</body>

</html>