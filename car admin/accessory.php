<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UR CARZ</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sidebar.css" rel="stylesheet">
  <link href="css/popup.css" rel="stylesheet">

</head>
<style>
body{
  background-image: url('images/1.jpg');
  background-position: center;
  opacity: 1;
}
h2{
  background-color: rgba(0, 0, 0, 0.5);
  padding: 0.5em;
  width:300px;
  color:white;
  position: fixed;
  text-align: center;
  left: 45%;
}
#MainTable{
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  text-align: center;
  width: 500px;
}
</style>
<body>
    <!-- Sidebar -->
    <div  id="sidebar-wrapper"><div id="mySidenav" class="sidenav">
      <div class="sidebar-heading">UR CARZ</div>
        <a href="#" >Dashboard</a>
        <a href="comadd.php" >Company</a>
        <a href="addcar.php" >Cars</a>
        <a href="#" >Accessories</a>
        <a href="#" >Sales</a>
        <a href="logout.php" >Log Out</a>

    </div>
  </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <br><br><h2><center><b>Accesory List</b></h3><br><br><br><hr style="border: 1px solid red;">

          <button class="btn btn-primary"  onclick="location.href='addacc.html'" id="butn">Add Accessory</button>


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