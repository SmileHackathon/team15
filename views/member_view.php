<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel=" stylesheet" href="./css/style_member.css">
    <link rel=" stylesheet" href="./css/reset.css">
    <title>会員専用ページ</title>
</head>

<body>
    <!-- ヘッダー-->
    <div class="sample">
        <img class="header_logo" src="logo.png" style="float: left;">
    </div>


    <p>こんにちは<?php echo html_escape($member['name']); ?>さん。
        Email:<?php echo html_escape($member['email']); ?>) <a href="logout.php">ログアウト</a></p>

    <!-- 会員専用ページ -->
    <div class="sub_title">
        <span class="under_bar">会員専用ページ</span>
    </div>

    <!-- 会員一覧 -->
    <div class="sub_title">
        <p class="attention">こちらはログイン後の画面です</p>
        <p class="member_page">会員一覧</p>
    </div>

    <ul>
        <?php foreach ($members as $member) : ?>
            <li><?php echo html_escape($member['name']); ?></li>
        <?php endforeach; ?>
        <p><a href="./index.php">ホームに戻る</a></p>
</body>

</html>