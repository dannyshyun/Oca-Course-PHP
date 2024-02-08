<!DOCTYPE html>
<?php
    $target = 'abcdedcba';
    $search = 'a';
    $targetLength = strlen($target);
    $searchLength = strlen($search);
    $result = strpos($target, $search);
?>
<html>
<head>
    <title>baclward match</title>
</head>
<body>
    <?php
    if( $result !== false ) {
        $str = ($result === ($targetLength - $searchLength)) ? "見つかりました。":"見つかりませんでした。";
        echo("文字列'$search'が、末尾に'$str'<br>");
    }
    else {
        echo("文字列が見つかりませんでした。<br>");
    }
    ?>
</body>
</html>
