<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<?php

include("connect.php");
$select_sanpham =  "select * from sanpham;";
$sanpham  = mysqli_query($connect, $select_sanpham);
?>


    <body>
  
        <div class="container">
            <div class="row">
            <?php while ($row1  = mysqli_fetch_array($sanpham)) { ?>
                <div class="col-md-3">
                    <figure>
                        <img src="<?php echo $row1[4]; ?>" class="img-fluid" alt="" srcset="">
                        <figcaption>
                            <h2><?php echo $row1[1] ?></h2>
                            <del><?php echo $row1[2] ?></del>
                            <p><?php echo $row1[3] ?></p>
                        </figcaption>
                    </figure>

                </div>
                
                <?php }?>




            </div>
        </div>

    </body>

    </html>