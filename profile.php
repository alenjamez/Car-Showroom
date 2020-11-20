<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
 session_start();
 $uid=$_SESSION['logid'];
 if(isset($_SESSION['user']))
 {   
    echo $uid;
    $sql="select * from tbl_registration where login_id="$uid"";
    die($sql);
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($res))
      {
        $name=$row['name'];
        $gender=$row['gender'];
        $email=$row['email'];
        $phno=$row['phone'];
        $propic='upload/'.$row["propic"];
      }
?>
<!doctype html>
<html>
<head>
  <title>URCARZ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
      body{
        background-image: linear-gradient(to right , #141e30 , #243b55); 
      }
      h1 {
			font-size: 7em;
			line-height: 1.1;
			font-family: "Lobster", cursive;
			margin-bottom: .25em;
			color: rgba(255, 255, 255, 0.75);
			text-shadow: -2px -2px 0 rgba(0, 0, 0, 0.125);
			text-transform: none;
      margin-left: 0px;
    }
    label{
        color: white;
        font-family: "Times New Roman";
        font-style: italic;
    }
    input{
        font-family: "Times New Roman";
        font-weight: bold;
       
    }

    </style>
</head>
<body>
<div class="header" >
	 <h1 class="display-4" style="color:white;"><b><i>Car Pool</b></i></h1>
				 </a>
 </div>
<div class="container bootstrap snippet">
    
    <div class="row">
  		<div class="col-sm-3">
              

      <div class="text-center">
        <img src="<?php echo $propic;?>" class="avatar img-circle img-thumbnail" alt="avatar"><br>
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload" name="img">
      </div><br>

        </div>
    	<div class="col-sm-9">
          <div class="tab-content">
            <div class="tab-pane active" id="home"><br><br>
                  <form class="form" method="post" action="update.php" id="registrationForm">
                      
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="nme" id="nme" value="<?php echo $name;?>" style=" font-size:15px;">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="gender"><h4>Username</h4></label>
                              <input type="text" class="form-control" name="usr" id="ge" value="<?php echo $user;?>" style=" font-size:15px;">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                          <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="mail" id="email" value="<?php echo $email;?>" style=" font-size: 15px;">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phne" id="phone" value="<?php echo $phno;?>" style=" font-size: 15px;" >
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="gender"><h4>Gender</h4></label>
                              <input type="text" class="form-control" name="gender" id="gend" value="<?php echo $gender;?>" style=" font-size: 15px;">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                  <button class="btn btn-lg"><a href="profile.php"> Cancel</a></button>
                            </div>
                      </div>
              	</form>
              <hr>
              
             </div>
            

        </div>
    </div>