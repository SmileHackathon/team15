<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style_signup.css">
    <link rel="stylesheet" href="./css/reset.css">
    <title>新規ユーザー登録</title>
</head>

<body>

    <!-- ヘッダー-->
    <div class="sample">
        <img class="header_logo" src="logo.png" style="float: left;">
    </div>

    <!-- 新規ユーザ―登録 -->
    <div class="sub_title">
        <span class="under_bar">新規ユーザー登録</span>
    </div>

    <form action="../signup.php" method="POST">
        <p>お名前：<input type="text" name="name">
            <?php if (isset($errs['name'])) {
                echo $errs['name'];
            }
            ?></p>
        <p>メールアドレス：<input type="text" name="email">
            <?php if (isset($errs['email'])) {
                echo $errs['email'];
            } ?></p>
        <p>パスワード：<input type="password" name="password">
            <?php if (isset($errs['password'])) {
                echo $errs['password'];
            }
            ?></p>
        </table>
        <p>
            <input class="push_button" type="submit" value="登録する">
        </p>
    </form>
</body>

</html>