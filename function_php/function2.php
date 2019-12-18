<?php

//文字数チェック関数
function StrCount($val){
    $StrCount = mb_strlen($val,'UTF-8');
    return $StrCount;
}

$a = "アイウエオ";

//全て半角文字かどうかチェック
function AllHalf($val){
    if (preg_match('/[^一-龠]/u',$val)) {
        return "ここに漢字は入力できません";
    }
    if (!preg_match("/^[a-zA-Z0-9]+$/",$val)) {
       $Half = mb_convert_kana($val,'rnakhcs');
       return $Half;
    }
}

//メールを送る関数
function MailSend($my_address,$title,$text,$receive_address,$header){
    //$my_addressは送信元のアドレス
    //$titleは題名(タイトル)
    //$textは本文
    //$receive_addressは受信先のアドレス
    //$headerはメールのヘッダー情報(例：$header = "From: xxx@example.com\nReply-To: yyy@example.com\n";)
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    mb_send_mail($my_address,$title,$text,$header);
}

//echo AllHalf($a);

/*

$text = "afi";
function AllHalf2($val){
    preg_match('/[^一-龠]/u',$val){
        
    }
    $str2 = mb_strpos($val,$str);
    if (is_numeric($str2)) {
        return "ここに漢字は入力できません";
    }
    if (!preg_match("/^[a-zA-Z0-9]+$/",$val)) {
        $Half = mb_convert_kana($val,'rnakhcs');
        return $Half;
     }

}

echo AllHalf2($text);

*/

$text2 = "ア家o";


function AllHalf3($val){
    if (preg_match('/^[一-龠]$/u',$val)) {
        return "ここに漢字は入力できません";
    }
}

echo AllHalf3($text2);



//全て全角文字かどうかチェック




?>