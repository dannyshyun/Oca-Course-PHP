<!DOCTYPE html>
<html>

<head>
    <title>Send Page</title>
</head>

<body>
    <form action="http://localhost/template/02/03/receive.php" method="post">
        メッセージを選択してください：<br />
        <input type="checkbox" name="messageArray[]" value="ラジオボタン1"> ラジオボタン 1<br>
        <input type="checkbox" name="messageArray[]" value="ラジオボタン2"> ラジオボタン 2<br>
        <input type="checkbox" name="messageArray[]" value="ラジオボタン3"> ラジオボタン 3<br>
        <input type="checkbox" name="messageArray[]" value="ラジオボタン4"> ラジオボタン 4<br>
        <br>
        <input type="submit" />
    </form>
    <br />
    <br />
</body>

</html>