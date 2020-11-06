<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
 session_start()
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>UR CARZ</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/sidebar.css" rel="stylesheet">
  <style>
  body{
   background-color:#EDF5E1;
   font-family: "Lato", sans-serif;
   opacity: 1;
  }
  .sidenav {
  height: 100%;
  width: 15%;
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
  margin-left: 15%; 
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
    background-color: #111;
    width:100%;
    height:77px;
    right:0;
    margin-right:0;
    left:0;
  }
 
  #butn{
  float:right;
  display:block;
  margin-right:20px;
  clear:left;
}
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: #111;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.dropdown-btn .active{
  outline:none;
}
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

.active {
  color: white;
  outline:none;
}

.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
  outline:none;
}

.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.name{
  width:75%;
  padding-top:5px;
  margin-left:17%;
  height:30px;
  background-color:white;
  border-radius:5px
}
.table{
  width:75%;
  margin-left:17%;
  height:100%;
  background-color:white;
  border-radius:5px;
  padding:20px 20px 20px 20px;
}
#MainTable{
    color: black;
    width: 100%;
    text-align:center;
}
h1{
  margin-left:17%;
  color:#747474;
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
        <a href="company.php">Manage Details</a>
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
<h1>Manage Details</h1>
<div class="name">
<h6 style="margin-left:10px;"><a href="#"style="text-decoration:none;color:black;">Home</a>&nbsp;/&nbsp;Company&nbsp;/&nbsp;Manage Details</h6>
</div><br>
<div class="table"> 
   <table id="MainTable" class="auto-index" width= 70% border="1">
   <thead>
     <tr>
     <th scope="col">Sl.no</th>
     <th scope="col">Company Name</th>
     <th scope="col"></th>
     </tr>
   </thead>
   <tbody>

   <?php
     $sql="select comp_id,name from tbl_com where status=1";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res))
     {
       $no=$row['comp_id'];
       $name=$row['name'];

       echo "<tr><td>";
       echo "</td><td>";
       echo $name;
       ?></td><td><a href="updatecom.php?id=<?php echo $no; ?>" >Edit</a></td?</tr><?php

     }
   ?>
   </tbody>
   </table>
   </div>
   </div>
 </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script>//serial number
var addSerialNumber = function () {
    var i = 0
    $('table tr').each(function(index) {
        $(this).find('td:nth-child(1)').html(index-1+1);
    });
};

addSerialNumber();
</script>
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
