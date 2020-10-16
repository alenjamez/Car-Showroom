<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
    $name=$_POST["comnme"];
    $pic=$_FILES["icn"]["name"];
    $desc=$_POST["disp"];

    $sql1="insert into tbl_com(name,icon,description) values('$name','$pic','$desc')";
    mysqli_query($con,$sql1);
    $t="../upload/company/".$pic;
    move_uploaded_file($_FILES["icn"]["tmp_name"],$t);
    header("location:comadd.php");
?>
