<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
 ?>
<!DOCTYPE html>
<html>
  <head><title>car showroom</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
  <style>
    body {font-family: Arial, Helvetica, sans-serif;
      background-color: #469fbd;
      background-position: center;
      background-size: contain;}
    .blackbox{
      background-image: url("upload/images/login.jpg"); 
      position: fixed;
      width: 1000px;
      height:550px;
      padding: 0px 0px 0px 30px;
      top:50%;
      left:50%;
      transform: translate(-50%,-50%);
      display: flex;
      border: 2px solid  #c1c8e4;
      border-radius: 10px;
      box-shadow: rgba(133, 133, 133, 0.603) 10px 10px 10px;
      opacity: 0.9;
    }
    .left { 
	    right: 0;
      width: 70%;
    } 
    .right{
      width: 35%;
	    left:0;
    }
    .loginform{
      margin-top: 100px;
      padding: 20px 5px 20px 5px;
      border: 2px solid  #c1c8e4;
      border-radius: 10px;
      box-shadow: rgba(133, 133, 133, 0.603) 10px 10px 10px;
    }
  </style>
  <body>
    <div class="blackbox">
      <div class="main right">
        <div class="loginform">
            <form method="post" enctype="multipart/form-data">
            <center><h3 style="color:#f2f2f2"><b>LOGIN</h3></b></center>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" class="form-control" placeholder="username" id="usr" name="usr" autocomplete=off  required >
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="psw" type="password" class="form-control" name="psw" placeholder="Password" required>
            </div><br>
            <div class="form-group" style="color:#f2f2f2;"><input type="checkbox"> Remember me</div>
            <div class="form-group"><input type="submit" value="LOGIN" class="form-control" name="button"></div>
            <footer><a href="registration.html" style="color:#f2f2f2;">Sign Up now</a></footer>
            </form>
          </div>
        <div>
      </div>
      <div class="main left"></div>
    </div>
    </div>
  </body>
</html>


<?php
session_start();
 if(isset($_POST['button']))
 {
    $usr=$_POST["usr"];
    $psw=$_POST["psw"];
    $_SESSION['user']=$usr;
    if($usr=="Admin")
    {
      $sql="select * from tbl_login where username='$usr'and password='$psw'";
    }
    else{
      $sql="select * from tbl_login where username='$usr'and password=md5('$psw')";
    }
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0)
    {
        while($row=mysqli_fetch_array($res))
        {
            if($usr=="Admin")
            {
             header("location:comadd.php");
            }
            else
            {
             $uid=$row['login_id'];
             $_SESSION['logid']=$uid;
             header("location:index.php");
            }
        }
    }
    else{
      //header("location:login.php");
      ?>
      <script>alert("invalid username or password")</script>
      <?php
    }
}
?>