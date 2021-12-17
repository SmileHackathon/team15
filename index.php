<?php
// セッションの開始 
session_start();
// 入力フォーム用セッションの初期化 
if (!isset($_SESSION["textName"])) {
    $_SESSION["textName"] = "";
}
if (!isset($_SESSION["textArea"])) {
    $_SESSION["textArea"] = "";
}
if (!isset($_SESSION["textGenre"])) {
    $_SESSION["textGenre"] = "";
}
if (!isset($_SESSION["textMessage"])) {
    $_SESSION["textMessage"] = "";
}
if (!isset($_SESSION["errorName"])) {
    $_SESSION["errorName"] = "";
}
if (!isset($_SESSION["errorArea"])) {
    $_SESSION["errorArea"] = "";
}
if (!isset($_SESSION["errorGenre"])) {
    $_SESSION["errorGenre"] = "";
}
if (!isset($_SESSION["errorMessage"])) {
    $_SESSION["errorMessage"] = "";
} ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="viewport" content="width=device-width" content="height=device-height" initial-scale=1.0>
    <link rel=" stylesheet" href="./css/style.css">
    <link rel=" stylesheet" href="./css/reset.css">
    <title>HTML+CSS トレーニング</title>
</head>

<body>
    <!-- ヘッダー-->
    <div class="sample">
        <img class="header_logo" src="ダウンロード.jpg" style="float: left;">
    </div>


    <div class="container">
        <div class="contentheader">今回のお題
        </div>
        <div class="contentbody"> 『はこだてのおすすめの居酒屋』
        </div>
    </div>

    <div class="input_form">
        <span class="under_bar">入力フォーム<span>
    </div>

    <!-- 入力フォームをまとめる  form タグ(method：データの送信方法、action：フォーム の送信先ページ) -->
    <form method="POST" action="./formCheck.php" id="inputForm">
        <!-- ニックネーム入力-->
        <p>1. お店の名前</p>
        <input type="text" name="textName" value="<?php echo $_SESSION["textName"]; ?>">
        <?php
        // 未入力チェックでエラーの場合は、エラーメッセージを表示
        if (!empty($_SESSION["errorName"])) {
            echo "<div class=\"errorMessage\">" . $_SESSION["errorName"] . "</div>";
        }
        ?>
        <!-- 項目選択(form:この選択肢に対応するフォームタグの id) -->
        <p>2. お店のエリア</p>
        <input type="text" name="textArea" value="<?php echo $_SESSION["textArea"]; ?>">
        <?php
        // 未入力チェックでエラーの場合は、エラーメッセージを表示 
        if (!empty($_SESSION["errorArea"])) {
            echo "<div class=\"errorMessage\">" . $_SESSION["errorArea"] . "</div>";
        }
        ?>
        <p>3. 料理のジャンル</p>
        <input type="text" name="textGenre" value="<?php echo $_SESSION["textGenre"]; ?>">
        <?php
        // 未入力チェックでエラーの場合は、エラーメッセージを表示 
        if (!empty($_SESSION["errorGenre"])) {
            echo "<div class=\"errorMessage\">" . $_SESSION["errorGenre"] . "</div>";
        }
        ?>
        <p>4. 一言メッセージ</p>
        <input type="text" name="textMessage" value="<?php echo $_SESSION["textMessage"]; ?>">
        <?php
        // 未入力チェックでエラーの場合は、エラーメッセージを表示 
        if (!empty($_SESSION["errorMessage"])) {
            echo "<div class=\"errorMessage\">" . $_SESSION["errorMessage"] . "</div>";
        }
        ?>
        <!-- 送信ボタン    -->
        <p><input class="push_bottom" type="submit"></p>
    </form>

    <div>
        <button class="sub_bottom" onclick="location.href='./views/signup_view.php'">新規登録</button>
        <button class="sub_bottom" onclick="location.href='./views/login_view.php'">ログイン</button>
    </div>

</body>

</html>

<?php
// 入力チェック結果を出力後に、セッションを削除
unset($_SESSION["textName"]);
unset($_SESSION["textArea"]);
unset($_SESSION["textGenre"]);
unset($_SESSION["textMessage"]);
unset($_SESSION["errorName"]);
unset($_SESSION["errorArea"]);
unset($_SESSION["errorGenre"]);
unset($_SESSION["errorMessage"]);
?>