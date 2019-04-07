
        
    <?php
    include("connect.php");

    $select_loai =  "select * from loai;";
    $loai  = mysqli_query($connect,$select_loai );
    ?>


   