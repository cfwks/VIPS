<?php

//メールアドレスの正規表現
function MailCheck($mail){
  if (!preg_match('/^[a-zA-Z0-9_.+-]+[@][a-zA-Z0-9.-]+$/',$mail)) {
    return "メールアドレスを正しく入力してください";
  }
}

//電話番号の正規表現(ハイフンありVer.)
function PhoneNum($num){
  if (!preg_match('/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/',$num)) {
      return "電話番号を正しく入力してください";
  }
  else {
      return "電話番号は正しいです";
  }
}

//電話番号の正規表現(10桁か11桁でハイフンなしVer.)
function PhoneNum2($num){
    if (!preg_match('/^(0{1}\d{9,10})$/',$num)) {
        return "電話番号を正しく入力してください";
    }
    else {
        return "電話番号は正しいです";
    }
}

//郵便番号の正規表現
function PostNum($num){
    if (!preg_match('/^(([0-9]{3}-[0-9]{4})|([0-9]{7}))$/',$num)) {
        return "郵便番号を正しく入力してください";
    }
    else {
        return "郵便番号は正しいです";
    }
}

//全角文字かどうかの正規表現


//半角文字かどうかの正規表現





 

 ?>
