<?php

//名前漢字エラー文
$err_none_l_kanji = "";
$err_none_f_kanji = "";

//名前カナエラー文
$err_none_l_kana = "";
$err_none_f_kana = "";

//ニックネームエラー文
$err_none_nickname = "";

//メールアドレス
$err_none_email = "";
$err_string_email ="";

//tell
$err_none_tell =""

//苗字漢字チェック
    //入力チェック
    if(empty($_POST["family_name_kanji"])){
            $err_none_l_kanji = "入力されていません。";
    }
//名前漢字チェック
    //入力チェック
    if(empty($_POST["first_name_kanji"])){
        $err_none_f_kanji = "入力されていません。";
    }

//苗字カナチェック
    //入力チェック
    if(empty($_POST["family_name_kana"])){
        $err_none_l_kana = "入力されていません。";
    }
    //カナチェック
    if (preg_match('/[^ァ-ヶー]/u',$_POST["family_name_kana"])) {
        $err_all_kana = "全てカタカナで入力してください。";
    }
//名前カナチェック
    //入力チェック
    if(empty($_POST["first_name_kana"])){
        $err_none_f_kana = "入力されていません。";
    }
    //カナチェック
    if (preg_match('/[^ァ-ヶー]/u',$_POST["first_name_kana"])) {
        $err_all_kana = "全てカタカナで入力してください。";
    }

//ニックネームチェック
    //入力チェック
    if(empty($_POST["nickname"])){
        $err_none_nickname = "入力されていません。";
    }

//mailチェック
    //入力チェック
    if(empty($_POST["email"])){
        $err_none_email ="入力されていません。";
    }

    //数値チェック
    if (!preg_match('/^[a-zA-Z0-9]+$/',$_POST["email"])) {
        $err_string_email = "メールアドレスは英語と数字のみで入力してください";
    }

//telチェック
//入力チェック
if(empty($_POST["tell"])){
    $error_none_tell = "入力されていません";
}


//生年月日入力チェック
//年
$error_none_year = "";
if(empty($_POST["year"])){
    $year ="生まれ年が入力されていません";
}
//月
$error_none_year_month = "";
if(empty($_POST["month"])){
    $month = "生まれ月が入力されていません";
}
//日
$error_none_day = "";
if(empty($_POST["day"])){
    $month = "生まれ日が入力されていません";
}

//住所入力チェック
//郵便番号入力チェック
$error_none_zip = "";
if(empty($_POST["zip"])){
    $error_none_zip = "郵便番号が入力されていません";
}

//郵便番号数字チェック
$error_number_zip = "";
if(is_numeric($_POST["zip"])){
    $error_number_zip = "数字で入力してください";
}

//パスワードチェック
$error_none_password
if(empty($_POST["password"])){
    $error_none_password = "パスワードが入力されていません";
}


?>