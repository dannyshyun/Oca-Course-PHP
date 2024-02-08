<!DOCTYPE html>
<?php
// 検索文字列
$pattern = "/.DEF/";

// 検索対象文字列
$subject = "abcDEF123";

// 正規表現を使用して文字列を検索
$result = preg_match($pattern, $subject);
?>
<html>

<head>
    <title>preg match</title>
</head>

<body>
    <?php
    // 検索失敗した時
    if ($result === false) :
    ?>
        エラーが発生しました！<br>
    <?php
    // エラーが出なかったとき（検索に失敗しなかったとき）
    // （文字列が見つかったかどうかではなく、検索の処理が正常に実行できたとき）
    else :
    ?>
        "<?php echo ($pattern); ?>"が<?php echo ($subject); ?>"のなかに
        <?php echo ($result === 1 ? "見つかりました" : "見つかりませんでした"); ?>
    <?php endif; ?>
</body>

</html>