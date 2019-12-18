<?php

//入力項目の未入力チェック
function EmptyError($val){
    if (empty($val)) {
      return "項目が未入力です";
    }
}

//数字判定のエラーチェック
function NumericError($num){
    if (!is_numeric($num)) {
        return "数字を入力してください";
    }
}

//名前登録の漢字以外のエラーチェック
function NameError($name){
  if (preg_match('/[^一-龠]/u',$name)) {
    return $name . "は全て漢字で入力してください";
  }
}

//名前登録のカタカナ以外のエラーチェック
function NameKanaError($kana){
  if (preg_match('/[^ァ-ヶー]/u',$kana)) {
    return $kana . "は全てカタカナで入力してください";
  }
}

//名前登録のひらがな以外のエラーチェック
function NameHiraganaError($hiragana){
  if (preg_match('/[^ぁ-んー]/u',$hiragana)) {
    return $hiragana . "は全てひらがなで入力してください";
  }
}

//メールアドレスの英語と数字以外のエラーチェック
function MailError($mail){
  if (!preg_match('/^[a-zA-Z0-9]+$/',$mail)) {
    return "メールアドレスは英語と数字のみで入力してください";
  }
}

//パスワードの英語と数字以外のエラーと桁数チェック
function PassNum($pass){
  if (!preg_match('/^[a-zA-Z0-9]+$/',$mail)) {
    return "パスワードは英語と数字のみで入力してください";
  }
  if (8 > mb_strlen($pass,'UTF-8') || mb_strlen($pass,'UTF-8') > 16) {
    return "パスワードは8文字以上、16文字以下で入力してください";
  }
}

//ユーザーIDが5桁で数字と英語かどうかチェック
function UserID($id){
  if (!preg_match('/^[a-zA-Z0-9]+$/',$mail)) {
    return "IDは英語と数字のみで入力してください";
  }
  if (mb_strlen($id,'UTF-8') != 5) {
    return "IDは5桁で入力してください";
  }
}

//SNSアカウントが数字と英語のみかチェック
function SNSCheck($val){
  if (!preg_match("/(?<![0-9a-zA-Z'\"#@=:;])@([0-9a-zA-Z_]{1,15})/u",$val)) {
    return "アカウント名は@と英数字で入力してください";
  }
}

function SNS($val){
    if(!preg_match('/[^ぁ-んー]/u',$val)){
        return "アカウント名にひらがなは使用できません";
    }
    if(!preg_match('/[^ァ-ヶー]/u',$val)){
        return "アカウント名にカタカナは使用できません";
    }
    if(!preg_match('/[^一-龠]/u',$val)){
        return "アカウント名に漢字は使用できません";
    }
}



$sns = "愛";

echo SNS($sns);





?>
