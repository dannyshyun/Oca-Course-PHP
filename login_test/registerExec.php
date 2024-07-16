<?php
    // register.phpから送信されたデータを取得
    $name = $_POST['name'];
    $password = $_POST['password'];

    // 受け取ったユーザー名とパスワードを表示する
    // echo "ユーザー名：".$name."<br>";
    // echo "パスワード：".$password."<br>";

    $dbUser = "bbsUser";
    $dbPass = "bbsUserPass";
    $dbHost = "localhost";
    $dbName = "bbs";

    $mysqlConnect = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    $result = mysqli_query
    (
        $mysqlConnect,
        "SELECT * FROM user WHERE name='$name'"
    );

    $userInfoArray = array();
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $userInfoArray[] = $row;
    }

    if(count($userInfoArray) > 0)
    {
        // ユーザー名とパスワードが一致した場合
        // echo "ログイン成功";
        // ここにログイン成功時の処理を書く
        header("Location: register.php");
        exit;
    }
    echo("重複なし！");

    mysqli_query
    (
        $mysqlConnect,
        "INSERT INTO user (name, password) VALUES ('$name', '$password')"
    );

    mysqli_close($mysqlConnect);
    header("Location: registerComplete.php");
    exit;
