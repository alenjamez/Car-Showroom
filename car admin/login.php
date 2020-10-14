<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
    $usr=$_POST["usr"];
    $psw=$_POST["psw"];
    $sql="select username,password from tbl_login where username='$usr'and password='$psw'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0)
    {
        header("location:comadd.php");
    }
    else{
    ?>
    <script>alert("invalid username or password")</script>
    <?php
    header("location:login.html");
    }
?>
