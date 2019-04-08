<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="jquery-ui.min.js"></script>
    <script type="text/javascript" src="jquery.ui.touch-punch.min.js"></script>


</head>
<?php
include("connect.php");
include("select.php");



if (isset($_POST['btnthem'])) {
    $sql_sanpham = "INSERT INTO `sanpham` (`MaSp`,`tensp`, `new_Price`, `old_price`, `img`, `desc`, `maloai`)   value  (null, '".$_POST['tensp']."',".$_POST['old_price'].",".$_POST['new_price'].",'".'img/'.$_POST['newfile']."','".$_POST['de']."','".$_POST['loai']."'); ";
//    echo $sql_sanpham;
    $resurel_loai =  mysqli_query($connect,$sql_sanpham);

}

?>

<body>

    <form action="" method="post">
        tensp <input type="text" name="tensp" id="">
        old price <input type="text" name="old_price" id="">
        new price <input type="text" value="" name="new_price" id="">
        new file <input type="file" value="" name="newfile" id="">
        desc  <input type="text" value="" name="de" id="">
      <select  name="loai">
        <?php
        while ($row1  = mysqli_fetch_array($loai)) { ?>

                <option><?php echo $row1[1] ?></option>
                    <?php
            } ?>
</select>
 

               
        
        

    </table>
                



        <input type="submit" value="them" name="btnthem" id="click">

    </form>

</body>

</html>