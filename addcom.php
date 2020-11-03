<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
    $name=$_POST["comnme"];
    $pic=$_FILES["icn"]["name"];

    $sql1="insert into tbl_com(name,icon) values('$name','$pic')";
    mysqli_query($con,$sql1);
    $t="../upload/company/".$pic;
    move_uploaded_file($_FILES["icn"]["tmp_name"],$t);
    header("location:comadd.php");
?>
