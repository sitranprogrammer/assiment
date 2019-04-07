<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<?php
    include("connect.php");
    $select_shop =  "select * from sanpham;";
    $sanpham  = mysqli_query($connect,$select_shop );
    echo $sanpham;
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <figure>
                <img src="img/1.png"class="img-fluid " alt="" srcset="">
                <figcaption style="text-align: center">
                    <p>sanpham1</p>
                    <p>price</p>
                    <p>fix_price</p>
                   <p>desc</p>
                </figcaption>
                </figure>
            </div>
          
        </div>
    </div>
</body>
</html>