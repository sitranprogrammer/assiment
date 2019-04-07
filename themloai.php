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
    
?>
<body>
<form action="" method="post">
    loai san pham : 
   <input type="text" name="txtloai" id="">
   <input type="submit" value = "btnthem" name="btnthem" id="">


</form>
</body>
    
</body>
</html>