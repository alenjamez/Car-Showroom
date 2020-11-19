<!DOCTYPE html>
<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
 session_start();
 if(isset($_SESSION['user']))
 {
 ?>
<html lang="en">
  <head>
  <title>UR CARZ</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="style/sidebar.css" rel="stylesheet">
  <style>
#adddet{
  width:100%x;
  margin-left:50px;
}
input[type=file]{ 
  font-size: 15px;
  color: rgb(153,153,153);
}
input[type=submit] {
        width: 15%;
        height:15%;
        color: #f2f2f2;
        background-color:  #469fbd;
        border-radius: 10px;
        border: solid #f2f2f2;
        opacity: 1;
        font-weight: bold;
        margin-left:250px;
    }
.add_car{
  width:83%;
  height:800px;
  /* background-color: blue; */
  margin-left:14%;
  position:relative;
}
.add_car .content{
  width:49%;
  margin-right:1%;
  float:left;
  padding:15px;
  background-color:white;
  /* border-radius:10px; */
}
.add_car .content label{
  margin-right:10px;
  padding:10px 10px 10px 10px;
}

.add_car .content input[type=text],[type=file]{
  width:350px;
  margin-right:10px;
  float:right;
}
.add_car .content select{
  width:350px;
  margin-right:10px;
  margin-top:10px;
  float:right;
}
.add_car .content .radio input[type=radio]{
  width:20px;
}
.add_car .content .radio label{
  width:150px;
  margin-right:0;
  padding:10px 10px 10px 10px;
}

</style>
<script>

function onLeave(_input)
{
    var check = _input.value;
    if (check.length < 3) {
        alert("Enter Something");
        _input.focus();
    }
}
</script>

</head>
<body>
<div class="sidenav">
  <div class="sidebar-heading">UR CARZ</div>
        <a href="#" >Dashboard</a>
        <button class="dropdown-btn" style="outline:none">Company
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
        <a href="Comadd.php">Add Company</a>
        <a href="company.php?msg=">Manage Details</a>
        </div>
        <button class="dropdown-btn"  style="outline:none">Car
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
        <a href="comadd.php">Add car</a>
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
<div class="back"><br>
<p style="color:white;float:right;font-family: Arial;"><b><?php echo $_SESSION['user']; ?>&nbsp;
            <img src="upload/images/admin.jpg" width="40" height="40"><p><br>
    </div></div>
<br>
<h1>Add Car</h1>
<div class="name">
<h6 style="margin-left:10px;"><a href="#"style="text-decoration:none;color:black;">Home</a>&nbsp;/&nbsp;Car&nbsp;/&nbsp;Add Car</h6>
</div><br>
<form id="adddet" method="post" enctype="multipart/form-data">
<div class="add_car">
  <div class="content">
    <label>Name</label><input type="text" name="one" pattern="[A-Za-z]+"><br>
    <label>Car Type</label><input type="text" name="two" pattern="[A-Za-z]+"><br>
    <label>Car Model</label><input type="text" name="three" pattern="[A-Za-z]+"><br>
    <label>Car Image</label><input type="file" name="four"><br>
    <label>image2</label><input type="file" name="five"><br>
    <label>image3</label><input type="file" name="six"><br>
    <label>image4</label><input type="file" name="seven"><br>
    <label>image5</label><input type="file" name="eight"><br>
    <label>image6</label><input type="file" name="nine"><br>
    <label>Colour</label><input type="text" name="ten"><br>
    <label>Car Price</label><input type="text" name="eleven"><br>
    <label>Car Lenght</label><input type="text" name="twelve"><br>
    <label>Car Width</label><input type="text" name="thirteen"><br>
    <label>Car Height</label><input type="text" name="fourteen"><br>
    <label>Max Power</label><input type="text" name="fifteen"><br>
    <label>Max Torque</label><input type="text" name="sixteen"><br>
    <label>Millage</label><input type="text" name="seventeen"><br>
    <label>No of Gear</label><input type="text" name="eighteen"><br>
  </div>
  <div class="content">
    <label>Company</label><select name="nineteen">
      <option value="">Choose Company</option>
      <?php 
       $sql3="select comp_id,name from tbl_com where status=1";
       $res=mysqli_query($con,$sql3);
       $select= '<select name="nineteen">';
       while($row=mysqli_fetch_array($res))
       {
         echo '<option value="'.$row['comp_id'].'">'.$row['name'].'</option>';
       }
      ?></select>
      <label>Fuel Type</label><select name="twenty">
        <option value="">Choose Fuel Type</option>
        <option value="Petrol">Petrol</option>
        <option value="Disel">Disel</option>
        <option value="CNG">CNG</option>
        <option value="Electric">Electric</option></select>
      <label>Transmission </label><select name="twentyone">
        <option value="">Choose Transmission Type</option>
        <option value="Automatic">Automatic</option>
        <option value="Manual">Manual</option>
        <option value="Semi-Automatic and Dual Cluch">Semi-Automatic and Dual Cluch</option></select>
      <label>No of seats</label><input type="text" name="twentytwo"><br>
      <label>Fog Lamb</label><input type="text" name="twentythree"><br>
      <label>Engine Diplay</label><input type="text" name="twentyfour"><br>
      <label>Fuel Capacity</label><input type="text" name="twentyfive"><br>
      <label>Boot Space</label><input type="text" name="twentysix"><br>
      <label>Body Type</label><input type="text" name="twentyseven" pattern="[A-Za-z]+"><br>
      <div class="radio">
      <label>Air Conditioner</label><input type="radio" name="twentyeight" value="Yes" required>&nbsp;Yes
      <input type="radio" name="twentyeight" value="No">&nbsp;No</div>
      <div class="radio">
      <label stylr="margin-right:50px">Wheel</label><input type="radio" name="twentynine" value="wheelcup" required>&nbsp;wheelcup
      <input type="radio" name="twentynine" value="Alloy">&nbsp;Alloy<input type="radio" name="twentynine" value="Crystal Alloy">&nbsp;Crystal Alloy</div>
      <div class="radio">
      <label>Power Window</label><input type="radio" name="thirty" value="Yes" required>&nbsp;Yes
      <input type="radio" name="thirty" value="No">&nbsp;No</div>
      <input type="submit" name="submit" value="Add">

      
  </div>
</div>
</form>
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
  </script>
</body>
</html>
<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
 if(isset($_POST['submit']))
 {
 
  $one=$_POST["one"];
  $two=$_POST["two"];
  $three=$_POST["three"];
  $pic=$_FILES["four"]["name"];
  $pic1=$_FILES["five"]["name"];
  $pic2=$_FILES["six"]["name"];
  $pic3=$_FILES["seven"]["name"];
  $pic4=$_FILES["eight"]["name"];
  $pic5=$_FILES["nine"]["name"];
  $ten=$_POST["ten"];
  $eleven=$_POST["eleven"];
  $twelve=$_POST["twelve"];
  $thirteen=$_POST["thirteen"];
  $fourteen=$_POST["fourteen"];
  $fifteen=$_POST["fifteen"];
  $sixteen=$_POST["sixteen"];
  $seventeen=$_POST["seventeen"];
  $eighteen=$_POST["eighteen"];
  $nineteen=$_POST["nineteen"];
  $twenty=$_POST["twenty"];
  $twentyone=$_POST["twentyone"];
  $twentytwo=$_POST["twentytwo"];
  $twentythree=$_POST["twentythree"];
  $twentyfour=$_POST["twentyfour"];
  $twentyfive=$_POST["twentyfive"];
  $twentysix=$_POST["twentysix"];
  $twentyseven=$_POST["twentyseven"];
  $twentyeight=$_POST["twentyeight"];
  $twentynine=$_POST["twentynine"];
  $thirty=$_POST["thirty"];


    $sql="select name from tbl_car where name='$one'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0)
    {
      $c="select car_id from tbl_car where name='$one'";
      $s=mysqli_query($con,$c)or die( mysqli_error($con));
      while($row=mysqli_fetch_array($res))
      {
      $id=$row['car_id'];
      } 
      
    }
    else{
      $sql1="insert into tbl_com(name,icon,status) values('$name','$pic','1')";
      mysqli_query($con,$sql1);
      $t="upload/company/".$pic;
      move_uploaded_file($_FILES["icn"]["tmp_name"],$t);
      ?><script>document.getElementById("msg").innerHTML = "Successful ";</script><?php
    }    
 }
}
?>