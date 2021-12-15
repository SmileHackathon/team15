<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
</head>

<body>
    <h1>ログイン</h1>
    <form action="../login.php" method="POST">
        <p>メールアドレス：<input type="text" name="email">
            <?php if (isset($errs['email'])) {
                echo html_escape($errs['email']);
            }
            ?></p>
        <p>パスワード：<input type="password" name="password">
            <?php if (isset($errs['email'])) {
                echo html_escape($errs['password']);
            }
            ?></p>
        <p><input type="submit" value="ログイン"></p>
        <p><a href="./signup_view.php">新規登録</a></p>
    </form>
</body>

</html>