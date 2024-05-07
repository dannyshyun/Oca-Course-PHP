<html>

<head>
    <title>Send Form</title>
</head>

<body>
    <form method="post" action="./receive.php">
        セレクトボックス（ドロップダウン式）：<br>
        <select name="selectBox-single1" size="1">
            <option value="hoge">Display:hoge</option>
            <option value="fuga">Display:fuga</option>
            <option value="piyo">Display:piyo</option>
            <option value="foo"> Display:foo</option>
            <option value="bar"> Display:bar</option>
        </select>
        <br>
        <br>

        セレクトボックス（複数行表示式）：<br>
        <select name="selectBox-single2" size="3">
            <option value="hoge">Display:hoge</option>
            <option value="fuga">Display:fuga</option>
            <option value="piyo">Display:piyo</option>
            <option value="foo"> Display:foo</option>
            <option value="bar"> Display:bar</option>
        </select>
        <br>
        <br>

        セレクトボックス（複数行表示式・選択可）：<br>
        <select name="selectBox-multiple" size="5" multiple>
            <option value="hoge">Display:hoge</option>
            <option value="fuga">Display:fuga</option>
            <option value="piyo">Display:piyo</option>
            <option value="foo"> Display:foo</option>
            <option value="bar"> Display:bar</option>
        </select>
        <br>
        <br>
        <input type="submit" value="送信">
    </form>

</body>

</html>