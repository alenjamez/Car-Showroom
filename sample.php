<?php
 $con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
 session_start();
 if(isset($_SESSION['user']))
 {   
    $lid=$_SESSION['logid'];
    $usr=$_SESSION['user'];
    $sql="select * from tbl_registration where login_id='$lid'";
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($res))
      {
        $name=$row['name'];
        $gender=$row['gender'];
        $email=$row['email'];
        $phno=$row['phone'];
        $loc=$row['location'];
        $propic='upload/images/'.$row["propic"];
      }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
body {font-family: Arial;
  background-image: linear-gradient(to right , #141e30 , #243b55);
}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  margin-top:100px;
  margin-left:30px;
  margin-right:30px;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
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
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  background-color: #ccc;
  margin-left:30px;
  margin-right:30px;
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
    img{

      margin-top:50px;
    }
</style>
</head>
<body>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'edit')" id="defaultOpen">Edit Details</button>
  <button class="tablinks" onclick="openCity(event, 'change')">Change Password</button>
</div>

<div id="edit" class="tabcontent">
      
</div>


<div id="change" class="tabcontent">
<p>hello</p>  
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
   
</body>
</html> 

<?php
 
 }
 else{
  header("location:login.php?msg=");
 }
 ?>
