<?php
// セッションの開始 
session_start();
// 入力フォーム用セッションの初期化 
if (!isset($_SESSION["textData"])) {
	$_SESSION["textData"] = "";
}
if (!isset($_SESSION["textDataName"])) {
	$_SESSION["textDataName"] = "";
}
if (!isset($_SESSION["textDataURL"])) {
	$_SESSION["textDataURL"] = "";
}
if (!isset($_SESSION["selectData"])) {
	$_SESSION["selectData"] = "";
}
if (!isset($_SESSION["errorTextData"])) {
	$_SESSION["errorTextData"] = "";
}
if (!isset($_SESSION["errorDataName"])) {
	$_SESSION["errorDataName"] = "";
}
if (!isset($_SESSION["errorDataURL"])) {
	$_SESSION["errorDataURL"] = "";
} ?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>HTML+CSS トレーニング</title>
</head>

<body>
	<div class="container">
		<div class="contentheader">今回のお題
		</div>
		<div class="contentbody"> 「はこだてのおすすめのカフェ！」
		</div>
		<div class="contentfooter"> 投稿する
		</div>
	</div>

	<h2>入力フォーム</h2>
	<!-- 入力フォームをまとめる  form タグ(method：データの送信方法、action：フォーム の送信先ページ) -->
	<form method="POST" action="./formCheck.php" id="inputForm">
		<!-- ニックネーム入力    -->
		<p>1. ニックネーム</p>
		<input type="text" name="textData" value="<?php echo $_SESSION["textData"]; ?>">
		<?php
		// 未入力チェックでエラーの場合は、エラーメッセージを表示 
		if (!empty($_SESSION["errorTextData"])) {
			echo "<div class=\"errorMessage\">" . $_SESSION["errorTextData"] . "</div>";
		}
		?>
		<!-- ニックネーム入力    -->
		<p>2. おすすめするカフェの名前</p>
		<input type="text" name="textDataName" value="<?php echo $_SESSION["textDataName"]; ?>">
		<?php
		// 未入力チェックでエラーの場合は、エラーメッセージを表示 
		if (!empty($_SESSION["errorDataName"])) {
			echo "<div class=\"errorMessage\">" . $_SESSION["errorDataName"] . "</div>";
		}
		?>
		<!-- 項目選択(form：この選択肢に対応するフォームタグの  id) -->
		<p>2. おすすめするカフェのURL</p>
		<input type="text" name="textDataURL" value="<?php echo $_SESSION["textDataURL"]; ?>">
		<?php
		// 未入力チェックでエラーの場合は、エラーメッセージを表示 
		if (!empty($_SESSION["errorDataURL"])) {
			echo "<div class=\"errorMessage\">" . $_SESSION["errorDataURL"] . "</div>";
		}
		?>
		<!-- 項目選択(form：この選択肢に対応するフォームタグの  id) -->
		<p>3. SNSのアカウントを知らせますか？</p>
		<select name="selectData" form="inputForm">
			<?php
			if (strcmp("項目コード 1", $_SESSION["selectData"]) === 0) {
				echo "<option value=\"項目コード 1\" selected>知らせる</option>";
			} else {
				echo "<option value=\"項目コード 1\">知らせる</option>";
			}
			if (strcmp("項目コード 2", $_SESSION["selectData"]) === 0) {
				echo "<option value=\"項目コード 2\" selected>知らせない</option>";
			} else {
				echo "<option value=\"項目コード 2\">知らせない</option>";
			}
			?>
		</select>
		<!-- 送信ボタン    -->
		<p><input type="submit"></p>
	</form>
	<button onclick="location.href='./views/signup_view.php'">新規登録</button>
	<button onclick="location.href='./views/login_view.php'">ログイン</button>

</body>

</html>

<?php
// 入力チェック結果を出力後に、セッションを削除
unset($_SESSION["textData"]);
unset($_SESSION["textDataName"]);
unset($_SESSION["textDataURL"]);
unset($_SESSION["selectData"]);
unset($_SESSION["errorTextData"]);
unset($_SESSION["errorDataName"]);
unset($_SESSION["errorDataURL"]);
?>