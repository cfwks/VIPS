<?php

//やってほしい処理
//DBに接続→
//データをデータベースに入れる。
//カラム名（？）はフォルダ内にありますー！
//出完了画面を本当は、モーダルで出したかった。パパっとできる人いたらだれかお願いしたいかも。。。


?>
<?php
//画像複数登録するための処理らしい
// ファイルがあれば処理実行
if(isset($_FILES["upload_file"])){

    // アップロードされたファイル件を処理
    for($i = 0; $i < count($_FILES["upload_file"]["name"]); $i++ ){

        // アップロードされたファイルか検査
        if(is_uploaded_file($_FILES["upload_file"]["tmp_name"][$i])){

            // ファイルをお好みの場所に移動
            move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i], "./images/" . $_FILES["upload_file"]["name"][$i]);
        }
    }
}

?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">

        <title>商品出品</title>
        <link rel="stylesheet" type="text/css" href="css/resete.css">
        <link rel="stylesheet" type="text/css" href="css/same.css">
        <link rel="stylesheet" type="text/css" href="css/sell.css">
        <link rel="stylesheet" type="text/css" href="css/modal.css">
        <link rel="stylesheet" type="text/css" href="css/modaal.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/modaal.min.js"></script>
        
       


    </head>

    <body>

        <div id="body">
            <h2>出品</h2>

            <div id="content">

                <form aciton="sell_fn.php" method="post" enctype="multipart/form-data">

                <!--画像登録-->
                <div class="sell-group">
                    <input type="file" multiple name="upload_file[]" />
                </div>
                
                <!--商品名-->
                    <div class="sell-group">
                        <p>商品名 <span>必須</span></p>
                        <input type="text" name="product_name">
                    </div>

                <!--商品説明-->
                    <div class="sell-group">
                        <p>商品説明 <span>必須</span></p>
                        <input class="pd" type="text" name="product_description">
                    </div>

                <!--カテゴリー-->
                    <div class="sell-group">
                            <p>カテゴリー <span>必須</span></p>
                            <select name="category">
                            <option value="fashion">ファッション</option>
                            <option value="outdoor">アウトドア</option>
                            <option value="book">本</option>
                            <option value="music">音楽</option>
                            </select></p>    
                    </div>

                <!--商品の状態-->
                    <div class="sell-group">
                            <p>商品の状態 <span>必須</span></p>

                            <select name="status">
                            <option value="0">悪い：傷や汚れあり</option>
                            <option value="1">少し悪い：やや傷や汚れあり</option>
                            <option value="2">普通：目立った傷や汚れなし</option>
                            <option value="3">綺麗：未使用に近い</option>
                            <option value="4">とても綺麗：未使用</option>
                        
                            </select>          
                    </div>


                <!--価格-->
                    <div class="sell-group">
                            <p>価格 <span>必須</span></p>
                            <input type="text" name="price">         
                    </div>      





                <!--送信-->
                    <div class="sell-group">
                        <div id="btn">
                            
                            <input type="submit" value="出品する">
                    
                        </div>

                        <!-- <div id="modal">
                            <p>出品完了しました</p>
                        </div> -->
                    </div>
                </form>

               
            </div>
<!-- 
            <div id="back">
                    <a href="#"><i class="fas fa-backward"></i>戻る</a>
            </div> --
        </div>

    





    <script>

        $('.modal').modaal();

    </script>

    </body>
</html>