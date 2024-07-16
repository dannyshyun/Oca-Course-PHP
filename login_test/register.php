<html>
    <head> 
        <title>Register</title>
    </head>

    <body>
        <!-- 入力された内容を"./registerExec.php"に送信 -->
            <form action="./registerExec.php" method="post">
                登録するユーザー情報を入力してください。<br><br>

                <label for="name">ユーザー名:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="password">パスワード:</label>
                <input type="password" id="password" name="password" required><br>

                <input type="submit" value="Register">
            </form>
    </body>
</html>