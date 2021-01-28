<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
 session_start();
 if(isset($_SESSION['user']))
 {
	$ids=$_GET['id'];
	$lid=$_SESSION['logid'];
	$sql="select propic from tbl_registration where login_id='$lid'";
	$res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($res))
      {
        $propic='upload/profile/'.$row["propic"];
	  }
	$sql1="select * from tbl_car where car_id='$ids'";
	$resl=mysqli_query($con,$sql1);
    while($row1=mysqli_fetch_array($resl))
      {
		$name=$row1["name"];
		$cartype=$row1["car_type"];
		$bootspace=$row1["bootspace"];
		$length=$row1["length"];
		$width=$row1["width"];
		$heigth=$row1["heigth"];
		$company=$row1["comp_id"];
		$seat=$row1["seat"];
		$boot=$row1["bootspace"];
		$ac=$row1["ac"];
		$capacity=$row1["capacity"];
		$steering=$row1["steering"];
		$airbag=$row1["airbag"];
		$enc=$row1["enc"];
	  }
	
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>URCARZ </title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<style>
		.name{
			font-family: Verdana,Arial,sans-serif;
			font-size:20px;
		}
		.item{
			width:100%;
			background:#5cdb95;
			padding:10% 5% 5% 5% ;
			height:1000px;	
		}
		.item1{
			width:67%;
			background:#fff;
			position:relative;
			float:left;
			border-radius: 3px;
 			padding: 20px;
		}
		.item2{
			width:30%;
			background:#fff;
			float:left;
			position:relative;
			margin-left:3%;
			border-radius: 3px;
  			padding: 20px;
		}
		input[type=text],[type=date] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=submit] {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
		.column {
			float: left;
			width: 20%;
			padding: 10px;
		}
		.column img {
			opacity: 0.8; 
			cursor: pointer; 
		}
		.column img:hover {
			opacity: 1;
		}
		.row:after {
			content: "";
			display: table;
			clear: both;
		}
		.container {
			width:35%;
			position: relative;
			display: none;
			float:left;
		}
		#imgtext {
			position: absolute;
			bottom: 15px;
			left: 15px;
			color: white;
			font-size: 20px;
		}
		/* Style the tab */
		.tab {
		overflow: hidden;
		color: Black;
		margin-top:450px;
		background-color: #fff;
		}

		/* Style the buttons inside the tab */
		.tab button {
		background-color: #fff;
		border-radius:3px;
		float: left;
		border: none;
		outline: none;
		cursor: pointer;
		padding: 14px 16px;
		transition: 0.3s;
		font-size: 17px;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
			color:orange;
			border-bottom: 3px solid orange; 
			border-radius:1px;
		}

		/* Create an active/current tablink class */
		.tab button.active {
			color:orange;
			border-bottom: 3px solid orange; 
			border-radius:1px;
		}

		/* Style the tab content */
		.tabcontent {
		background-color: #fff;
		display: none;
		border: 1px solid white;
		padding: 6px 12px;
		padding-bottom:50px;
		box-shadow:rgba(133, 133, 133, 0.603) 10px 10px 10px;
		}
		.lis {
		list-style-type: none;
		text-align: center;
		margin: 0;
		padding: 0;
		}

		.lis li {
		display: inline-block;
		font-size: 20px;
		padding: 2px;
		}
    </style>
</head>
<body>
<div class="allcontain">
	<div class="header">
			<ul class="givusacall" style="align:center">
				<li>Give us a call : +91 9544441942 </li>
			</ul>
		</div>
	<nav class="topnavbar navbar-default topnav">
	<div class="navbar-header">
            <a class="navbar-brand logo" href="#"><img src="upload/images/logo1.png" alt="logo"></a>
        </div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="home.php">HOME</a> </li>
				<li class="active"><a href="#">COMPANY</a> </li>
                <li class="active"><a href="#">CARS</a> </li>
                <li class="active"><a href="#">COMPARISON</a> </li>
				<li class="active"><a href="#">ACCESSORY</a> </li>
				<li><a href="contact.html">CONTACT</a></li>
				<li class="dropdown" style="margin-left:250px">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user']; ?><span class="caret"></span>
					<img src="<?php echo $propic;?>" width="35" height="35"></a>
					<ul class="dropdown-menu dropdowncostume">
						<li><a href="profile.php">My Profile</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</div>
<div class="allcontain">
	<div class="item">
    	<div class="item1">
			<h2><b style="margin-top:2px">Maruti <?php echo $name;?></b></h2>
			<?php
			$sql2="select * from tbl_carimage where car_id='$ids' and xmt=1";
			$res1=mysqli_query($con,$sql2);
			while($row2=mysqli_fetch_array($res1)){
				$img1='upload/car/'.$row2["main"];
				$img2='upload/car/'.$row2["image1"];
				$img3='upload/car/'.$row2["image2"];
				$img4='upload/car/'.$row2["image3"];
				$img5='upload/car/'.$row2["image4"];
				$img6='upload/car/'.$row2["image5"];
			}
			$sql3="select MAX(Price) AS Largest,MIN(Price) AS Smallest  from tbl_transmission where car_id='$ids'";
			$res2=mysqli_query($con,$sql3);
			while($row2=mysqli_fetch_array($res2)){
				$small=$row2["Smallest"];
				$large=$row2["Largest"];
			}
			?>
			<p><?php echo $small;?>-<?php echo $large;?></p>
			<div class="container">
			<img id="expandedImg" src="<?php echo $img1;?>" style="width:100%">
			<div id="imgtext"></div>
			</div>
			<div class="content">
			</div>

			<div class="row">
			<div class="column">
				<img src="<?php echo $img1;?>"  style="width:100%" id="defaulto" onclick="myFunction(this);">
			</div>
			<div class="column">
				<img src="<?php echo $img2;?>"  style="width:100%" onclick="myFunction(this);">
			</div>
			<div class="column">
				<img src="<?php echo $img3;?>" style="width:100%" onclick="myFunction(this);">
			</div>
			<div class="column">
				<img src="<?php echo $img4;?>"  style="width:100%" onclick="myFunction(this);">
			</div>
			<div class="column">
				<img src="<?php echo $img5;?>"  style="width:100%" onclick="myFunction(this);">
			</div>
			<div class="column">
				<img src="<?php echo $img6;?>"  style="width:100%" onclick="myFunction(this);">
			</div>
			</div>
		</div>
		<div class="item2">
			<h2><b style="margin-top:2px"><center>Test Drive</center></b></h2>
			<form action="/action_page.php">
			<label for="fname">Name</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required>

			<label for="loc">Location</label>
			<input type="text" id="loc" name="loc" placeholder="Your location.." required>

			<label for="date">Date</label>
			<input type="date" id="date" name="date" placeholder="Your location.." required>
		
			<input type="submit" value="Submit">
			</form>
		</div>

		<div class="tab">
			<button class="tablinks" onclick="openCity(event, 'colour')" id="defaultOpen">Colours</button>
			<button class="tablinks" onclick="openCity(event, 'model')">Models</button>
		</div>

		<div id="colour" class="tabcontent">
			<div class="container bootstrap snippet">
			<ul class="lis">
					<?php
					$sql4="select colour,main from tbl_carimage where car_id='$ids'";
					$res4=mysqli_query($con,$sql4);
					while($row4=mysqli_fetch_array($res4)){
						$colour=$row4["colour"];
						$image='upload/car/'.$row4["main"];
					?>
					<li>
						<img style="width:50%"src="<?php echo $image;?>">
						<h2 class="name"><?php echo $colour;?></h2>
					</li>
					<?php
					}?>
				</ul>
			</div>
		</div>


		<div id="model" class="tabcontent">
			<div class="container bootstrap snippet">
				<div class="tab-pane active" id="home"><br><br>
						<b>hello</b>	
				</div>
			</div>
		</div>

		<ul class="lis">
					<?php
					$sql4="select colour,main from tbl_carimage where car_id='$ids'";
					$res4=mysqli_query($con,$sql4);
					while($row4=mysqli_fetch_array($res4)){
						$colour=$row4["colour"];
						$image='upload/car/'.$row4["main"];
					?>
					<li>
						<img style="width:50%"src="<?php echo $image;?>">
						<h2 class="name"><?php echo $colour;?></h2>
					</li>
					<?php
					}?>

	</div>
</div>


   <br><br>
        <div class="bottommenu">
            <p>"All of those cars were once just a dream in somebody’s head".
                Peter Gabriel </p>
                 <img src="upload/images/line.png" alt="line"> <br>
                 <div class="bottomsocial">
                     <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
                    </div>
	</div>
</div>
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
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<script type="text/javascript">
    history.pushState(null, null, location.href);
    history.back();
    history.forward();
    window.onpopstate = function () { history.go(1); };
</script>
<script>
function myFunction(imgs) {
  	var expandImg = document.getElementById("expandedImg");
	expandImg.src = imgs.src;
	expandImg.parentElement.style.display = "block";
}
document.getElementById("defaulto").click();
</script>
</body>
</html>
<?php
}
else{
	header("location:login.php?msg=");
  }
  ?>