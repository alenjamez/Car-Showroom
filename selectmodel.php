<?php
$con=mysqli_connect("localhost","root","","car showroom") or die("couldn't connect");
$car=$_GET['id'];
$sql4="select model_id,model from tbl_model where car_id=$car";
$result=mysqli_query($con,$sql4);
while($row=mysqli_fetch_array($result))
{
  echo '<option value="'.$row['model_id'].'">'.$row['model'].'</option>';
}
?>