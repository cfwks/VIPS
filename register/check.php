<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">

        <title>会員情報登録</title>
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <script src="js/ajaxzip3.js" charset="UTF-8"></script>
        <script src="js/birthday.js"></script>


    </head>

    <body>

    <div id="form">
   

    <div id="input">
    <h2>会員情報登録</h2>


<div class="form-group">
    <p>お名前（全角）</p>
      <?php echo $_POST["family_name_kanji"]."  ".$_POST["first_name_kanji"];?>

</div>

<div class="form-group">
    <p>お名前カナ(全角)</p>
    <?php echo $_POST["family_name_kana"]."  ".$_POST["first_name_kana"];?>
        
</div>


<div class="form-group">
       <p> ニックネーム</p>
        <?php echo $_POST["nickname"]; ?>

</div>


<div class="form-group">
        <p>メールアドレス</p>
        <?php echo $_POST["email"]; ?>
</div>

<div class="form-group">
        <p>携帯番号</p>
        <?php echo $_POST["tell"]; ?>
</div>



<div class="form-group">
            <p>生年月日</p>
        <?php echo $_POST["year"]."年".$_POST["month"]."月".$_POST["day"];?>
</div>      


<div class="form-group">
        <p>住所</p>
        <?php echo $_POST["zip31"];?>
        <?php echo $_POST["pref31"];?>
        <?php echo $_POST["addr31"];?>
              
</div>

<div class="form-group">
      <p>ユーザーID</p>
        <?php echo $_POST["userID"];?>
</div>            



<div class="form-group">                  
        <p>パスワード</p>
        <?php echo $_POST["password"]; ?>
              
</div>


    <div class="form-group">
    <a href="check.php"><button type="submit" class="btn-default btn-red">戻る</button></a>

    
      <a href="comp.php"><button type="submit" class="btn-default btn-red">次へ進む</button></a>
</div>
<!--inputの閉じタグ-->
</div>
<!--formの閉じタグ-->
    </body>
</html>