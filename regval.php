<?php



session_start();

header('location:register.php');


$con= mysqli_connect("localhost","root","");

mysqli_select_db($con,"market");


$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];

$q = "SELECT * FROM usertable WHERE  id= '$id', name='$name'";

$result = mysqli_query($con,$q);

$num= mysqli_num_rows($result);

if($num==1){
	
	echo "Username already taken";
}else{
	$reg= "INSERT INTO usertable VALUES ('$id','$name','$password')";
	mysqli_query($con,$reg);
	echo "Registration succesful";
}



?>