<?php
// セッションの開始 session_start();
// 各入力データを取得
$selectBelongCompany = $_SESSION["selectBelongCompany"]; $lastName = htmlspecialchars($_SESSION["lastName"]);
$firstName = htmlspecialchars($_SESSION["firstName"]); $belongDate = $_SESSION["belongDate"];
/*
* DB 設定 */
// DB サーバへ接続
$con = mysqli_connect("127.0.0.1", "root", ""); // データベース選択
$selectDb = mysqli_select_db($con, "phptraining"); // 文字コード指定
$setCharCode = mysqli_query($con, "SET NAMES utf8"); /*
* 登録データ生成 */
// 所属年月日(文字列を日付型に変換)
$insertBelongDate = date("Y/m/d", strtotime($belongDate)); /*
* 登録処理 */
$insertTCompanyPerson = mysqli_query($con, "INSERT INTO 
T_COMPANY_PERSON(COMPANY_KEY,PERSON_LAST_NAME,PERSON_FIRST_NAME,BELONG_DATE) VALUES('$selectBelongCompany','$lastName','$firstName','$insertBelongDate')");
// MySQL の切断
$close = mysqli_close($con);
18 / 41// 入力データを登録後に、セッションを削除
unset($_SESSION["selectBelongCompany"]);
unset($_SESSION["lastName"]);
unset($_SESSION["firstName"]);
unset($_SESSION["belongDate"]);
unset($_SESSION["errorName"]);
unset($_SESSION["errorBelongDate"]);
//登録完了後、入力画面へ遷移 header("Location: ./form.php");
?>