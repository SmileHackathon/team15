<?php
        // セッションの開始
        session_start();
        //入力データを取得 

        // ニックネーム
        $textData = $_POST["textData"];
        // おすすめのカフェの名前
        $textDataName = $_POST["textDataName"];
        //　おすすめのカフェのURL
        $textDataURL = $_POST["textDataURL"];
        // SNSを知らせるか選択
        $selectData = $_POST["selectData"];

        $isError = false;

    // ニックネームの未入力チェック 
    if (empty($textData)) {
        // 未入力の場合、エラーメッセージを格納
        $_SESSION["errorTextData"] = "ニックネームが入力されていません";
        $isError = true;
    }
    //  おすすめのカフェの名前の未入力チェック 
    if (empty($textDataName)) {
        // 未入力の場合、エラーメッセージを格納
        $_SESSION["errorDataName"] = " おすすめのカフェの名前が入力されていません";
        $isError = true;
    }
    //  おすすめのカフェのURLの未入力チェック 
    if (empty($textDataURL)) {
        // 未入力の場合、エラーメッセージを格納
        $_SESSION["errorDataURL"] = " おすすめのカフェのURLが入力されていません";
        $isError = true;
    }

        // 入力データをセッションに登録
        $_SESSION["textData"] = $textData;
        $_SESSION["textDataName"] = $textDataName;
        $_SESSION["textDataURL"] = $textDataURL;
        $_SESSION["selectData"] = $selectData;

        if ($isError) {
            // エラーの場合、index.php に戻る 
            $_SESSION["formError"] = 1;
            header("Location: ./index.php");
        } else {
            // エラーが無い場合、formConfirmation.php に戻る 
            header("Location: ./formConfirmation.php");
        }
?>