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
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  margin-top:10px;
  margin-right:30px;
  margin-left:17%;
}
.tab button {
  background-color: inherit;
  float: left;
  border:none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}
.tab button:hover {
  background-color: #ddd;
}
.tab button.active {
  background-color: #ccc;
}
.tabcontent {
  display: none;
  padding: 20px 20px 20px 20px;
  border: 1px solid #ccc;
  border-radius:10px;
  border-top: none;
  background-color: #ccc;
  margin-right:30px;
  height:100%;
  margin-left:17%;
  position:relative;
}
.tabcontent label{
  margin-right:10px;
  color:black;
  padding:10px 10px 10px 10px;
  
}

.tabcontent input[type=text],[type=file]{
  width:250px;
  margin-right:70px;
  float:right;
}
.tabcontent select{
  width:250px;
  margin-right:70px;
  float:right;
  height:35px;
}
.tabcontent textarea{
  width:250px;
  margin-right:70px;
  float:right;
}
.tabcontent .radio input[type=radio]{
  width:20px;
  padding:0px 0px 0px 0px;
}
.tabcontent .radio label{
  width:150px;
  color:black;
  margin-right:0;
  text-align:left !important;
}
input[type=submit] {
  width: 15%;
  height:15%;
  color: #f2f2f2;
  background-color:  #469fbd;
  border-radius: 10px;
  opacity: 1;
  font-weight: bold;
  margin-left:350px;
  }

</style>
</head>
<body>
  <div class="sidenav">
    <div class="sidebar-heading">UR CARZ</div>
      <a href="#" >Dashboard</a>
      <button class="dropdown-btn" style="outline:none">Company
      </button>
      <div class="dropdown-container">
        <a href="Comadd.php">Add Company</a>
        <a href="company.php?msg=">Manage Details</a>
      </div>
      <button class="dropdown-btn"  style="outline:none">Car</button>
      <div class="dropdown-container">
        <a href="comadd.php">Add car</a>
        <a href="#">Manage Details</a>
      </div>
      <button class="dropdown-btn"  style="outline:none">Accesory</button>
      <div class="dropdown-container">
        <a href="#">Add car</a>
        <a href="#">Manage Details</a>
      </div>
        <a href="#" >Sales</a>
        <a href="logout.php" >Log Out</a>
      </div>
    </div>
  </div>
	<div class="main">
	  <div class="back"><br>
		  <p style="color:white;float:right;font-family: Arial;"><b><?php echo $_SESSION['user']; ?>&nbsp;
        <img src="upload/profile/admin.jpg" width="40" height="40"><p><br>
    </div>
  </div><br>
	<h1>Add Car</h1>
	<div class="name">
	 <h6 style="margin-left:10px;"><a href="#"style="text-decoration:none;color:black;">Home</a>&nbsp;/&nbsp;Car&nbsp;/&nbsp;Add Car</h6>
	</div><br>
  <div class="add_car">
    <div class="tab">
      <button class="tablinks" style="margin-left:280px" onclick="openCity(event, 'car')" id="defaultOpen">Car Details</button>
      <button class="tablinks" onclick="openCity(event, 'model')">Model</button>
      <button class="tablinks" onclick="openCity(event, 'colour')">Colour</button>
      <button class="tablinks" onclick="openCity(event, 'fuel')">Transmission</button>
    </div>

    <div id="car" class="tabcontent">
      <div class="container bootstrap snippet">
        <div class="row">
  	      <div class="col-sm-6">
            <form class="form" method="post" id="details1" enctype="multipart/form-data">
	          <label style="margin-top:45px;">Name</label><input type="text" name="name" style="margin-top:50px;" pattern="[A-Za-z]+"><br>
            <label >Car Type</label><select name="cartype">
              <option value="">Choose car Type</option>
              <option value="Petrol">Sedan</option>
              <option value="Disel">HatchBack</option>
              <option value="CNG">SUV</option>
              <option value="Electric">MUV</option>
              <option value="Electric">Luxury</option></select>
		        <label>Body Type</label><input type="text" name="bodytype" pattern="[A-Za-z]+"><br>
            <label>Car Lenght</label><input type="text" name="length"><br>
  	        <label>Car Width</label><input type="text" name="width"><br>
            <label>Car Height</label><input type="text" name="heigth"><br>
            <label>No of seats</label><input type="text" name="seat"><br>
          </div>
    	    <div class="col-sm-6">
            <div class="tab-content">
              <div class="tab-pane active" id="home"><br><br>
                <label>No of Airbag</label><input type="text" name="airbag"><br>
                <label>Engine Diplay</label><input type="text" name="display" style="margin-top:5px;"><br>
			          <label>Company</label><select name="company">
                <option value="" disabled selected>Choose Company</option>
                <?php 
                $sql3="select comp_id,name from tbl_com where status=1";
                $res=mysqli_query($con,$sql3);
                $select= '<select name="company">';
                while($row=mysqli_fetch_array($res))
                {
                  echo '<option value="'.$row['comp_id'].'">'.$row['name'].'</option>';
                }
                ?></select>
                <label>Boot Space</label><input type="text" name="boot"><br>
                <div class="radio">
                  <label>Air Conditioner</label>
                  <input style="margin-left:20px;" type="radio" name="ac" value="Yes" required>&nbsp;Yes
                  <input type="radio" name="ac" value="No">&nbsp;No
                </div>
                <div class="radio">
                  <label>Power Window</label>
                  <input style="margin-left:20px;" type="radio" name="window" value="Yes" required>&nbsp;Yes
                  <input type="radio" name="window" value="No">&nbsp;No
                </div>
                <label>Description</label><textarea name="desc" id="desc"></textarea><br><br>
	              <input type="submit" name="Add1" value="Add">
                </form>    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="model" class="tabcontent">
      <div class="container bootstrap snippet">
        <div class="row">
  	      <div class="col-sm-6">
            <form class="form" method="post" id="details2" enctype="multipart/form-data">
            <label style="margin-top:45px;">Company</label><select name="company" style="margin-top:50px;" onchange="myFunction(this.value);">
            <option value="" disabled selected>Choose Company</option>
            <?php 
            $sql3="select comp_id,name from tbl_com where status=1";
            $res=mysqli_query($con,$sql3);
            $select= '<select name="company">';
            while($row=mysqli_fetch_array($res))
            {
              echo '<option data-value="'.$row['comp_id'].'">'.$row['name'].'</option>';
            }
            ?></select><br>
            <label>Car</label><select name="car">
            <option value="" disabled selected>Choose Car</option>
            <?php 
            $sql3="select car_id,name from tbl_car where status=1";
            $res=mysqli_query($con,$sql3);
            $select= '<select name="car">';
            while($row=mysqli_fetch_array($res))
            {
              echo '<option value="'.$row['car_id'].'">'.$row['name'].'</option>';
            }
            ?></select><br>
            <label>Car Model</label><input type="text" name="model" pattern="[A-Za-z]+"><br>
            <label>Fog Lamb</label><input type="text" name="fog"><br>
            <div class="radio">
              <label>Wheel</label><input type="radio" name="wheel" value="wheelcup" required>&nbsp;Wheelcup
              <input type="radio" name="wheel" value="Alloy">&nbsp;Alloy
              <input type="radio" name="wheel" value="Crystal Alloy">&nbsp;Crystal Alloy<br>
            </div>
            <div class="radio">
                  <label>Power start</label><input type="radio" name="start" value="Yes" required>&nbsp;Yes
                  <input type="radio" name="stat" value="No">&nbsp;No
                </div><br>
            <div class="radio1">
                  <label>Sensor</label><input type="radio" name="sensor" value="Yes" required>&nbsp;Yes
                  <input type="radio" name="sensor" value="No">&nbsp;No
            </div><br>
            <div class="radio1">
                  <label>Reverse Camera</label><input type="radio" name="camera" value="Yes" required>&nbsp;Yes
                  <input type="radio" name="camera" value="No">&nbsp;No
            </div><br>
          </div>
    	    <div class="col-sm-6">
            <div class="tab-content">
              <div class="tab-pane active" id="home"><br><br>
              <label>Sterio</label><input type="text" name="sterio" pattern="[A-Za-z]+"><br>
                <div class="radio">
                  <label>Auto AC</label><input type="radio" name="auto" value="Yes" required>&nbsp;Yes
                  <input type="radio" name="auto" value="No">&nbsp;No
                </div><br>
                <div class="radio">
                  <label>Sunroof</label><input type="radio" name="sunroof" value="Yes" required>&nbsp;Yes
                  <input type="radio" name="sunroof" value="No">&nbsp;No
                </div><br>
                <div class="radio">
                  <label>Auto Headlamb</label><input type="radio" name="headlamb" value="Yes" required>&nbsp;Yes
                  <input type="radio" name="headlamb" value="No">&nbsp;No
                </div><br>
	              <input type="submit" name="Add2" value="Add">
                </form>    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="colour" class="tabcontent">
      <div class="container bootstrap snippet">
        <div class="row">
  	      <div class="col-sm-6">
            <form class="form" method="post" id="details3" enctype="multipart/form-data">
	          <label style="margin-top:45px;">Car</label><select name="company" style="margin-top:50px;">
            <option value="" disabled selected>Choose Car</option>
            <?php 
            $sql3="select car_id,name from tbl_car where status=1";
            $res=mysqli_query($con,$sql3);
            $select= '<select name="car">';
            while($row=mysqli_fetch_array($res))
            {
              echo '<option value="'.$row['car_id'].'">'.$row['name'].'</option>';
            }
            ?></select><br>
            <label>Colour</label><input type="text" name="colour"><br>
            <label>Car Image</label><input type="file" name="car1"><br>
            <label>image2</label><input type="file" name="car2"><br>
          </div>
    	    <div class="col-sm-6">
            <div class="tab-content">
              <div class="tab-pane active" id="home"><br><br>
                <label>image3</label><input type="file" name="car3"><br>
                <label>image4</label><input type="file" name="car4"><br>
                <label>image5</label><input type="file" name="car5"><br>
                <label>image6</label><input type="file" name="car6"><br>
	              <input type="submit" name="Add3" value="Add">
                </form>    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="fuel" class="tabcontent">
      <div class="container bootstrap snippet">
        <div class="row">
  	      <div class="col-sm-6">
            <form class="form" method="post" id="details3" enctype="multipart/form-data">
	          <label style="margin-top:45px;">Car</label><select name="company" style="margin-top:50px;">
            <option value="" disabled selected>Choose Car</option>
            <?php 
            $sql3="select car_id,name from tbl_car where status=1";
            $res=mysqli_query($con,$sql3);
            $select= '<select name="car">';
            while($row=mysqli_fetch_array($res))
            {
              echo '<option data-value="'.$row['car_id'].'">'.$row['name'].'</option>';
            }
            ?></select><br>
            <label style="margin-top:45px;">Car Model</label><select name="model" style="margin-top:50px;">
            <option value="" disabled selected>Choose model</option>
            <?php 
            $sql3="select model_id,name from tbl_model where status=1";
            $res=mysqli_query($con,$sql3);
            $select= '<select name="model">';
            while($row=mysqli_fetch_array($res))
            {
              echo '<option data-value="'.$row['model_id'].'">'.$row['name'].'</option>';
            }
            ?></select><br>
            <label>Fuel Type</label><select name="fueltype">
              <option value="">Choose Fuel Type</option>
              <option value="Petrol">Petrol</option>
              <option value="Disel">Disel</option>
              <option value="CNG">CNG</option>
              <option value="Electric">Electric</option></select>
            <label>Transmission </label><select name="gear">
              <option value="">Choose Transmission Type</option>
              <option value="Automatic">Automatic</option>
              <option value="Manual">Manual</option>
              <option value="Semi-Automatic and Dual Cluch">Semi-Automatic and Dual Cluch</option></select>     
            <label>Engine CC</label><input type="text" name="power"><br>
  	        <label>BHP</label><input type="text" name="torque"><br><br>     
          </div>

    	    <div class="col-sm-6">
            <div class="tab-content">
              <div class="tab-pane active" id="home"><br><br>
                <label>Fuel Capacity</label><input style="margin-top:10px" type="text" name="capacity"><br>
                <label>No of Gear</label><input type="text" name="gearno"><br>
                <label>Millage</label><input type="text" name="millage"><br>
                <label>Car Price</label><input type="text" name="price"><br>
	              <input type="submit" name="Add4" value="Add">
                </form>    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    function myFunction(element) {
      window.alert("hello");
      var fun=element;
      <?php $comp=fun;
      $sql12="select comp_id from tbl_com where name='$comp' and status=1";?>
      die($sql12);
    }
  </script>  
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
  <script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
</boby>
</html>
<?php
  if(array_key_exists('Add1', $_POST))
  {
   $name=$_POST["name"];
   $cartype=$_POST["cartype"];
   $bodytype=$_POST["bodytype"];
   $length=$_POST["length"];
   $width=$_POST["width"];
   $heigth=$_POST["heigth"];
   $company=$_POST["company"];
   $seat=$_POST["seat"];
   $boot=$_POST["boot"];
   $ac=$_POST["ac"];
   $window=$_POST["window"];
   $display=$_POST["display"];
   $airbag=$_POST["airbag"];
   $desc=$_POST["desc"];

   $sql1="insert into tbl_car (name,car_type,body_type,engine_display,airbag,ac,window,length,width,heigth,bootspace,description,seat,comp_id) values ('$name','$cartype','$bodytype','$display',$airbag,'$ac','$window',$length,$width,$heigth,$power,$torque,$boot,'$desc',$seat,$company)";
   mysqli_query($con,$sql1);
  }
  if(array_key_exists('Add2', $_POST))
  {
   $car=$_POST["car"];
   $model=$_POST["model"];
   $fog=$_POST["fog"];
   $wheel=$_POST["wheel"];
   $start=$_POST["start"];
   $auto=$_POST["auto"];
   $sunroof=$_POST["sunroof"];
   $headlamb=$_POST["headlamb"];

   $sql2="insert into tbl_car () values()";
   mysqli_query($con,$sql2);
  }
  if(array_key_exists('Add3', $_POST))
  {
   $car=$_POST["car"];
   $colour=$_POST["colour"];
   $car1=$_FILES["img"]["car1"];
   $car2=$_FILES["img"]["car2"];
   $car3=$_FILES["img"]["car3"];
   $car4=$_FILES["img"]["car4"];
   $car5=$_FILES["img"]["car5"];
   $car6=$_FILES["img"]["car6"];

   $sql3="insert into tbl_car () values ()";
   mysqli_query($con,$sql3);
  }
  if(array_key_exists('Add4', $_POST))
  {
   $car=$_POST["car"];
   $fueltype=$_POST["fueltype"];
   $price=$_POST["price"];
   $capacity=$_POST["capacity"];
   $millage=$_POST["millage"];
   $gear=$_POST["gear"];
   $power=$_POST["power"];
   $torque=$_POST["torque"];
   
   $sql4="insert into tbl_car (power,torque) values ()";
   mysqli_query($con,$sql4);
  }
 }
 else{
	header("location:login.php?msg=");
  }
?>