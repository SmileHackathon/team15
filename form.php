<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel=" stylesheet" href="./css/style_form.css">
    <link rel=" stylesheet" href="./css/reset.css">
    <title>入力フォーム</title>
</head>

<body>
    <!-- ヘッダー-->
    <div class="sample">
        <img class="header_logo" src="logo.png" style="float: left;">
    </div>

    <!-- 入力フォーム -->
    <div class="sub_title">
        <span class="under_bar">入力フォーム</span>
    </div>

    <form action="./dataRegist.php" method="POST">
        <p>お店の名前：<input type="text" name="Restaurant_name">
            <?php if (isset($errs['Restaurant_name'])) {
                echo $errs['Restaurant_name'];
            }
            ?></p>
        <p>お店のエリア：<input type="text" name="Restaurant_erea">
            <?php if (isset($errs['Restaurant_erea'])) {
                echo $errs['Restaurant_erea'];
            } ?></p>
        <p>料理のジャンル：<input type="text" name="Restaurant_genre">
            <?php if (isset($errs['Restaurant_genre'])) {
                echo $errs['Restaurant_genre'];
            }

            ?></p>
        <p>一言メッセージ：<input type="text" name="Restaurant_message">
            <?php if (isset($errs['Restaurant_message'])) {
                echo $errs['Restaurant_message'];
            }

            ?></p>
        </table>
        <p><input class="push_button" type="submit" value="登録する"></p>
    </form>
</body>

</html>