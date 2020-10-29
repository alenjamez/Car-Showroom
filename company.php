<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>UR CARZ</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/sidebar.css" rel="stylesheet">
  <style>
  body{
   background-color:black;
   font-family: "Lato", sans-serif;
   opacity: 1;
  }
  .sidenav {
  height: 100%;
  width: 20%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 20%; 
  font-size: 28px; 
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.sidebar-heading {
  font-size: 30px;
  color: #f1f1f1;
 padding: 10px 16px 12px 24px;
}
h2{
    width:300px;
    color:white;
    position: fixed;
    text-align: center;
    left: 45%;
  }
  .back{
    background-color: rgba(0, 0, 0, 0.5);
    width:100%;
    height:185px;
    right:0;
    left:0;
  }
  #MainTable{
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    width: 500px;
    padding-left:400px;
  }


</style>
</head>
<body>
<div class="sidenav">
  <div class="sidebar-heading">UR CARZ</div>
        <a href="#" >Dashboard</a>
        <a href="#" >Company---</a>
        <a href="addcar.php" >Cars</a>
        <a href="accessory.php" >Accessories</a>
        <a href="#" >Sales</a>
        <a href="logout.php" >Log Out</a></div>

<div class="main"><br>
<p style="color:red;padding-right:0"><b><?php echo $_SESSION['user']; ?>&nbsp;
            <img src="upload/images/admin.jpg" width="50" height="50"><p>
<div class="back"><br><h2><center><b>Company List</b></h3><br><br>
      <hr style="border: 1px solid red;"></div><br>
      <button class="btn btn-primary"  onclick="location.href='add.html'" id="butn">Add Company</button>
</div>
<br><br><br><br>
   <center>
   <table id="MainTable" width= 70% border="1">
   <thead>
     <tr>
     <th scope="col">Sl.no</th>
     <th scope="col">Company Name</th>
     </tr>
   </thead>
   <tbody>

   <?php
     $sql="select comp_id,name from tbl_com";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res))
     {
       $no=$row['comp_id'];
       $name=$row['name'];

       echo "<tr><td>";
       echo $no;
       echo "</td><td>";
       echo $name;
     }
   ?>
   </tbody>
   </table></center>
   </div>
   </div>
 </div>
    <!-- /#page-content-wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
  document. getElementById("myButton"). onclick = function () {
  location. href = "www.yoursite.com";
  };
  </script>
</body>
</html>