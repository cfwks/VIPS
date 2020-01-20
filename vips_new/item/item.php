<!--
やってほしいこと
productテーブル（sellフォルダに入ってる）から、データを引っ張ってきて表示
出品者テーブル(まだ作ってない)から、出品者名を引っ張ってきて表示



-->

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>商品詳細ページ</title>
        <link rel="stylesheet" type="text/css" href="css/resete.css">
        <link rel="stylesheet" type="text/css" href="css/same.css">
        <link rel="stylesheet" type="text/css" href="css/item.css">
    </head>


    <body>
    
    <div id="body">

        <h2>商品名</h2>

        <div id="content">

            <div id="item">

                <div class="item">

                    <p><img src="images/item.jpg" alt="商品名"></p>
                        <div id="btn">
                            <div class="btn"><button type="button"><p><img src="images/heart_icon.png" alt="いいねアイコン"></p></button></div>
                            <div class="btn"><a href="#"><button type="button">comment</button></a></div>
                        </div>
                </div>

                <div  class="item">

                    <table>

                        <tr><th>説明</th><td><p>韓国で購入したワンピースです。二度イベントで使用しましたが
                            、目立った汚れはなく美品です。
                        </p></td></tr>
                        <tr><th>カテゴリー</th><td>ファッション＞ワンピース</td></tr>
                        <tr><th>状態</th><td>良い</td></tr>
                        <tr><th>価格</th><td>￥3,000</td></tr>
                        <tr><th>出品者</th><td>waa</td></tr>

                    </tale>

                </div>
                <div id="buy">
                   
                    <a href="../cart/cart.php"><button type="button">カートに入れる</button></a>
                 </div>
            </div>

            

               

        </div>
        
        
    </div>
    <!-- <div id="back">
        <a href="#"><button type="button">前ページに戻る</button></a>
    </div> -->

    </body>
</html>