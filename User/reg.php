<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
    $name=$_POST["nme"];
    $gender=$_POST["gender"];
    $loc=$_POST["location"];
    $email=$_POST["mail"];
    $phno=$_POST["phne"];
    $usr=$_POST["usr"];
    $psw=md5($_POST["psw"]);

    $sql="select username,password from tbl_login where username='$usr'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0)
    {
        ?>
        <script>alert("User name alredy exist")</script>
        <?php
    }
    else{
        $sql="insert into tbl_login(username,password) values('$usr','$psw')";
        mysqli_query($con,$sql);
        $li=mysqli_insert_id($con);
        $sql1="insert into tbl_registration(name,gender,email,phone,location,login_id) values('$name','$gender','$email','$phno','$loc',$li)";
        mysqli_query($con,$sql1);
        header("location:login.html");
    }

?>
