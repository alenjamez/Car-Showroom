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
    margin-left:40%
  }
  #butn{
  float:right;
  display:block;
  margin-right:20px;
  clear:left;
}

</style>
</head>
<body>
<div class="sidenav">
  <div class="sidebar-heading">UR CARZ</div>
        <a href="#" >Dashboard</a>
        <a href="comadd.php" >Company</a>
        <a href="addcar.php" >Cars</a>
        <a href="#" >Accessories</a>
        <a href="#" >Sales</a>
        <a href="logout.php" >Log Out</a></div>

<div class="main">
<div class="back"><br><h2><center><b>Accesory List</b></h2><br></center>
<p style="color:white;float:right;font-family: Arial;"><b><?php echo $_SESSION['user']; ?>&nbsp;
            <img src="upload/images/admin.jpg" width="40" height="40"><p><br>
      <hr style="border: 1px solid red;"></div>
      <button class="btn btn-primary"  onclick="location.href='addacc.html'" id="butn">Add Accesory</button>
      <button class="btn btn-primary"  onclick="location.href='addacc.html'" id="butn">Edit Details</button>
</div>
<br><br><br><br>
   
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
   </table>
   </div>
   </div>
 </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
  document. getElementById("myButton"). onclick = function () {
  location. href = "www.yoursite.com";
  };
  </script>
</body>
</html>