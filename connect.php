<?php
    $connect = mysqli_connect("localhost","root","") or die("khong the vao sql");
$db = mysqli_select_db( $connect,"shoping_cart")
or die (" khong the vao csdl");
 mysqli_query($connect,"set name utf-8");
?>