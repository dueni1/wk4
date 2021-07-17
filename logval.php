<?php


session_start();

$con= mysqli_connect("localhost","root","");

mysqli_select_db($con,"market");


$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];

$q = "SELECT * FROM usertable WHERE  id = '$id' && name = '$name' && password = '$password'";

$result = mysqli_query($con,$q);

$num= mysqli_num_rows($result);

if($num==1){
	$_SESSION['name'] =$name;
	header('location:userhome.php');
}else{
	header('location:login.php');
}


?>