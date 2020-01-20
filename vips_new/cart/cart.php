<!--
やってほしいこと
カートの中身のデータ（商品名と値段と画像）を表示
合計数と金額を表示


-->


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/resete.css">
        <link rel="stylesheet" type="text/css" href="css/cart.css">
        <link rel="stylesheet" type="text/css" href="css/same.css">
    </head>

    <body>

        <div id="body">
            <h2>商品カート</h2>

                <div id="content">

                    <div id="total">
                        <p id="total_amount">1（点）</p>
                        <p id="total_price">￥3,000</p>
                    </div>

                    <div id="item">

                        <div class="item">

                            <p><img src="images/item.jpg"></p>
                            
                            <div id="item_disc">
                                <p clas="item_title">韓国風ワンピース</p>
                                <p class="price">￥3,000</p>
                            </div>

                        </div>


                        <div class="item">

                            <p><img src="images/item2.jpg"></p>

                            <div id="item_disc">
                                <p clas="item_title">韓国風タイトワンピース</p>
                                <p class="price">￥4,000</p>
                            </div>

                        </div>

                    </div>

                    <div id="buy">
                        <a href="../buy/buy.php"><button type="button">購入する</button></a>
                
                    </div>
                </div>

        <!-- <div id="back">
            <a href="#"><button type="button">前のページへ戻る</button></a>
        </div>
         -->
        </div>

    </body>




</html>