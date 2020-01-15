




<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">

        <title>商品出品情報</title>
        <link rel="stylesheet" type="text/css" href="css/sell.css">
       


    </head>

    <body>

    <div id="form">
    <h2>商品出品</h2>


    <div id="input">

    <form action="sell_check.php" method="post" enctype="multipart/form-data">
<div class="sell-group">
    <p>画像ファイル <span>必須</span></p>
    <input type="file" name="pic">
    </div>


<div class="sell-group">
    <p>商品名 <span>必須</span></p>
    <input type="text" name="product_name">
        
</div>


<div class="sell-group">
       <p>商品説明 <span>必須</span></p>
        <input class="pd" type="text" name="product_description">
</div>


<div class="sell-group">
        <p>カテゴリー <span>必須</span></p>
        <select name="category">
        <option value="fashion">ファッション</option>
        <option value="outdoor">アウトドア</option>
        <option value="book">本</option>
        <option value="music">音楽</option>
        </select></p>
       
</div>

<div class="sell-group">
        <p>商品の状態 <span>必須</span></p>

        <select name="status">
        <option value="0">悪い：傷や汚れあり</option>
        <option value="1">少し悪い：やや傷や汚れあり</option>
        <option value="2">普通：目立った傷や汚れなし</option>
        <option value="3">綺麗：未使用に近い</option>
        <option value="4">とても綺麗：未使用</option>
       
        </select></p>
                
</div>



<div class="sell-group">
            <p>価格 <span>必須</span></p>
            <input type="text" name="price">         
</div>      


<!-- 
    データディクショナリには書いたけど商品出品画面にはいらない気がする
    <div class="sell-group">
        <p>出品状態</p>
         
</div> -->




    <div class="sell-group">
      <a href="sell_check.php"><button type="submit" class="btn-default btn-red">次へ進む</button></a>
</div>
</form>
<!--inputの閉じタグ-->
</div>
<!--formの閉じタグ-->


    </body>
</html>