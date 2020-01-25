<?php
if(isset($_POST["send"])){

    require("function.php");

    function Connection($host, $user, $pass, $dbName);

    $sql = "INSERT INTO $table (send_id, send) VALUES ($_POST["send_id"],$_POST["send"]);";
    function Insert($sql, $host, $user, $pass, $dbName);


}

?>



<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">

        <title>購入</title>
        <link rel="stylesheet" type="text/css" href="css/resete.css">
        <link rel="stylesheet" type="text/css" href="css/same.css">
        <link rel="stylesheet" type="text/css" href="css/manege.css">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <script src="js/jquery-3.3.1.min.js"></script>
        

        <style>
        table{
            border: solid 2px;
        }
        .category {
            background-color: black;
            margin: 3px;
            color:white;

        }
        
        </style>
       


    </head>

    <body>

        <div id="body">
            <h2>管理画面</h2>

            <div id="content">
                    
                <h3>販売状況</h3>
                
                <table>



                    <tr class="category"><th>発送ID</th><th>購入日</th><th>購入者</th><th>購入者郵便番号</th><th>購入者住所</th><th>発送者</th><th>発送者郵便番号</th><th>発送者住所</th><th>発送状況</th></tr>
                    <tr><th>1</th><td>20200124</td><td>A</td><td>066-9999</td><td>AAAAAAAAAAA</td><td>B</td><td>000-0000</td><td>gggggggggg</td><td>未</td></tr>




                </table>



                <form action="manage.php" method="post">

                    <p>発送状況</p>
                    発送ID<input type="text" name="send_id">  <input type="radio" name="send" value="未">未発送　<input type="radio" name="send" value="済">済



                </form>



            </div>
        </div>
    <script>


    </script>

    </body>
</html>