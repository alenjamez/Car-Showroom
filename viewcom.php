<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
 session_start();
 $ids=$_GET['id'];
 $sql="select * from tbl_com where comp_id='$ids'";
 $res=mysqli_query($con,$sql)or die( mysqli_error($con));;
 while($row=mysqli_fetch_array($res))
 {
   $name=$row['name'];
   $pic='upload/company/'.$row['icon'];
 }

 if(isset($_POST['del']))
 {
    $sql2="update tbl_com set status=0 where comp_id='$ids'";
    mysqli_query($con,$sql2);
    header("Location:company.php?msg=* Company deleted");
 }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>UR CARZ</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="style/sidebar.css" rel="stylesheet">
  <style>
#del {
        width: 16%;
        height:8%;
        color: #f2f2f2;
        background-color:  #469fbd;
        border-radius: 10px;
        border: solid #f2f2f2;
        opacity: 1;
        font-weight: bold;
        margin-left:550px;
        margin-top:20px;
    }
</style>
</head>
<body>
<div class="sidenav">
  <div class="sidebar-heading">UR CARZ</div>
        <a href="#" >Dashboard</a>
        <button class="dropdown-btn" style="outline:none">Company
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
        <a href="comadd.php">Add Company</a>
        <a href="company.php?msg=">Manage Details</a>
        </div>
        <button class="dropdown-btn"  style="outline:none">Car
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
        <a href="addcar.php">Add car</a>
        <a href="#">Manage Details</a>
        </div>
        <button class="dropdown-btn"  style="outline:none">Accesory
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
        <a href="#">Add car</a>
        <a href="#">Manage Details</a>
        </div>
        <a href="#" >Sales</a>
        <a href="logout.php" >Log Out</a></div>

<div class="main">
<div class="back">
<p style="color:white;float:right;font-family:Arial;padding-top:10px"><b><?php echo $_SESSION['user']; ?>&nbsp;
            <img src="upload/images/admin.jpg" width="40" height="40"><p><br>
    </div></div>
<br>
<h1>View Details</h1>
<div class="name">
<h6 style="margin-left:10px;"><a href="#"style="text-decoration:none;color:black;">Home</a>&nbsp;/&nbsp;Company&nbsp;/&nbsp;Manage Details&nbsp;/&nbsp;Edit Details</h6>
</div><br>
<div class="table"> 
    <form method="post">
    <div class="text-center">
        <img src="<?php echo $pic;?>" class="avatar img-circle img-thumbnail" alt="avatar"><br>
        </div>
        <br>
        <label style="font-size:15px;width:40%;margin-left:30%;text-align:center"><?php echo $name;?></label><br>
        <input type="submit" name="del" id="del" value="Delete">
    </form>
   </div>
   </div>
 </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
  </script>
</body>
</html>