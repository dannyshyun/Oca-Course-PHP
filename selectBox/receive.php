<?php
// selectBox-single1で選択された値を取得
$single1 = isset($_POST['selectBox-single1']) ? $_POST['selectBox-single1'] : '';
// selectBox-single2で選択された値を取得
$single2 = isset($_POST['selectBox-single2']) ? $_POST['selectBox-single2'] : '';
// selectBox-multi1で選択された値を取得
$multi = isset($_POST['selectBox-multiple']) ? $_POST['selectBox-multiple'] : array();
?>
<html>

<head>
    <title>Receive Data</title>
</head>

<body>
    セレクトボックス（ドロップダウン式）：<br>
    <?php echo "single1: $single1<br>"; ?>
    <br>
    セレクトボックス（複数行表示式）：<br>
    <?php echo "single2: $single2<br>"; ?>
    <br>
    セレクトボックス（複数行表示式・選択可）：<br>
    <?php
    if (count($multi) === 0) :
    ?>
        <?php foreach ($multi as $key => $value) : ?>
            <?php echo "multi: $value<br>"; ?>
        <?php endforeach; ?>
    <?php else : ?>
        選択されていません。
    <?php endif; ?>
</body>

</html>