<!DOCTYPE html>
<html>

<head></head>

<body>
    <?php
    echo("==　又は　!= を使った曖昧な比較（型の自動変化を伴う比較）<br/>");

    echo ("1 == 1 => ");
    echo ( 1 == 1 ? "一致" : "不一致");
    echo ("<br/><br/>");

    echo ("1 == '1' => ");
    echo ( 1 == '1' ? "一致" : "不一致");
    echo ("<br/><br/>");

    echo ("1 != 1 => ");
    echo ( 1 != 1 ? "不一致" : "一致");
    echo ("<br/><br/>");

    echo ("1 != '1' => ");
    echo ( 1 != '1' ? "不一致" : "一致");
    echo ("<br/><br/>");

    echo("===　又は　!== を使った厳密な比較（自動変化をせず、型も含めた比較）<br/>");

    echo ("1 === 1 => ");
    echo ( 1 === 1 ? "一致" : "不一致");
    echo ("<br/><br/>");

    echo ("1 === '1' => ");
    echo ( 1 === '1' ? "一致" : "不一致");
    echo ("<br/><br/>");

    echo ("1 !== 1 => ");
    echo ( 1 !== 1 ? "不一致" : "一致");
    echo ("<br/><br/>");

    echo ("1 !== '1' => ");
    echo ( 1 !== '1' ? "不一致" : "一致");
    echo ("<br/><br/>");    

    echo ("PHPでは文字列同士を　===　や　!==で比較をすることができる<br/>");
    echo ("'abc' === 'abc' => ");
    echo ( 'abc' === 'abc' ? "一致" : "不一致");
    echo ("<br/><br/>");

    echo ("'abc' === 'def' => ");
    echo ( 'abc' === 'def' ? "一致" : "不一致");
    echo ("<br/><br/>");

    echo ("'abc' !== 'abc' => ");
    echo ( 'abc' !== 'abc' ? "不一致" : "一致");
    echo ("<br/><br/>");

    echo ("'abc' !== 'def' => ");
    echo ( 'abc' !== 'def' ? "不一致" : "一致");
    echo ("<br/><br/>");

    echo ("PHPではcase分の条件に文字列を使うことができる<br/>");
    $infoName = "iso";
    echo ("switchに渡す値${infoName}<br/>");
    switch ($infoName) {
        case "pixels":
            echo ("36.3 megaPixels");
            break;

        case "name":
            echo ("D800E");
            break;

        case "iso":
            echo ("50 ~ 25600");
            break;

        default:
            echo ("no info...");
            break;
    }
    echo ("<br/><br/>");
    ?>
</body>

</html>