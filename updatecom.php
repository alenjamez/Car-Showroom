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
   background-color:#EDF5E1;
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

.main {
  margin-left: 200px;  
  font-size: 20px; 
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
  margin-left:22%;
  height:30px;
  background-color:white;
  border-radius:5px
}
.table{
  width:75%;
  margin-left:22%;
  height:100%;
  background-color:white;
  border-radius:5px;
  padding:20px 20px 20px 20px;
}
#MainTable{
    color: black;
    width: 100%;
}
h1{
  margin-left:22%;
  color:#747474;
}
input[type=submit] {
        width: 25%;
        height:15%;
        color: #f2f2f2;
        background-color:  #469fbd;
        border-radius: 10px;
        border: solid #f2f2f2;
        opacity: 1;
        font-weight: bold;
        margin-left:650px;
        margin-top:20px;
    }
</style>
<script>
function Val()
{
var fileInput = document.getElementById('icn');
var filePath = fileInput.value;
var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
if(!allowedExtensions.exec(filePath)){
	document.getElementById("err").innerHTML = "* Please upload file having extensions .jpeg/.jpg/.png only.";
	fileInput.value = '';
	return false;
 }
else{
	//Image preview
	if (fileInput.files && fileInput.files[0]) {
		var reader = new FileReader();
		reader.onload = function(e) {
			document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
		};
		reader.readAsDataURL(fileInput.files[0]);
	}
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
        <a href="comadd.php">Add Company</a>
        <a href="company.php">Manage Details</a>
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
<h1>Update Details</h1>
<div class="name">
<h6 style="margin-left:10px;"><a href="#"style="text-decoration:none;color:black;">Home</a>&nbsp;/&nbsp;Company&nbsp;/&nbsp;Manage Details&nbsp;/&nbsp;Edit Details</h6>
</div><br>
<div class="table"> 
    <form>
    <div class="text-center">
        <img src="<?php echo $propic;?>" class="avatar img-circle img-thumbnail" alt="avatar"><br>
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload" id="icn" name="icn" onblur="Val()">
        <span class="err" style="color:green"></span>
        </div>
        <br>
        <input type="text" name="comnme" id="comnme" value="<?php echo $user;?>" style="font-size:15px;width:40%;margin-left:30%;"><br>
        <select name="drpdwn" id="derpdwn"  style="font-size:15px;width:40%;margin-left:30%;margin-top:10px">   
        <option value="volvo">Active</option>
        <option value="saab">Inactive</option></select>
        <input type="submit" onsubmit="val();" value="Update">
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
<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
 if(isset($_POST['submit']))
 {
 
    $name=$_POST["comnme"];
    $pic=$_FILES["icn"]["name"];

      $sql1="insert into tbl_com(name,icon) values('$name','$pic')";
      mysqli_query($con,$sql1);
      $t="upload/company/".$pic;
      move_uploaded_file($_FILES["icn"]["tmp_name"],$t);  
 }
?>