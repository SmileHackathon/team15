<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style_login.css">
    <link rel="stylesheet" href="./css/reset.css">
    <title>ログイン画面</title>
</head>

<body>

    <!-- ヘッダー-->
    <div class="sample">
        <img class="header_logo" src="logo.png" style="float: left;">
    </div>

    <!-- ログイン -->
    <div class="sub_title">
        <span class="under_bar">ログイン</span>
    </div>

    <form action="./login.php" method="POST">
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
        <p><input class="push_button" type="submit" value="ログイン"></p>
        <p><a href="./views/signup_view.php">新規登録</a></p>
    </form>
</body>

</html>