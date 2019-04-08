<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
    include ("connect.php");

    if(isset($_POST['btnthem']))
    {
     
        $sql_loai = "INSERT INTO `loai` (`maloai`, `tenloai`) VALUES (NULL, '".$_POST['txtloai']."'); ";
        $resurel_loai =  mysqli_query($connect,$sql_loai);
        // header
    }
    if(isset($_POST['btnsua']))
    {
        
    $sql_sua=  "UPDATE `loai` SET `tenloai`='".$_POST['txtsua']."' WHERE `maloai` =".$_POST['txtloai']." ;";
        
        // echo $sql_sua;
        $resurel_sua =  mysqli_query($connect,$sql_sua);
        // header
    }

    include  ("select.php");
?>
<body>
<form action="" method="post">
    loai san pham : 
   <input type="text" name="txtloai" id="">
    sua san pham : 
   <input type="text" name="txtsua" id="">
   <input type="submit" value = "btnthem" name="btnthem" id="">
   <input type="submit" value = "btnSua" name="btnsua" id="">
   <?php
while ($row1  = mysqli_fetch_array($loai)) {  ?>
<?php  echo "<p>$row1[0]   $row1[1]</p>"   ?>
  

 <?php } 
?>

</form>


</body>
    
</body>
</html>