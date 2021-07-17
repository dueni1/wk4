
<?php

include 'database.php';

if(isset($_POST['submit'])){
	

$error=array();
$id=$_POST['id'];
$name=$_POST['name'];
$description=$_POST['description'];
$amount=$_POST['amount'];
$img=$_FILES["image"]['name'];
$size = $_FILES["image"]['size'];
$tmp = $_FILES["image"]['tmp_name'];
$type= $_FILES["image"]['type'];



$ext = array("jpeg", "pgg", "png","jpg","jfif");



$q = "insert into images values ('$id','$name','$description','$amount','$img')";

if (mysqli_query($con,$q))
{
	move_uploaded_file($tmp,"upload".$img);
    header('location:userhome.php');
	echo "<script>alert('image has been uploaded to folder')</script>";
	
}
else{
	echo "<script>alert('image has not been uploaded to folder')</script>";
}
	
	
}
	
	

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>userhome</title>
</head>
<body>
	<li><a href="userhome.php">HOME</a></li>
	<li><a href="useritems.php">MY SHOP</a></li>
	<li><a href="shops.php">SHOPS</a></li>
	<li><a href="reset.php">RESET PASSWORD</a></li>
	<li><a href="logout.php">LOGOUT</a></li>
	
	<form action="userhome.php" method="POST" enctype="multipart/form-data">
	
	<h1>WELCOME TO USER HOMEPAGE</h1>
	<h1>ADD ITEMS</h1>
	
	<input type="file" name="image" style=""><br>
	
	
    <br><input type="submit" id="insert" name="submit" value="upload" style=""><br>
	<input type="text" name="name" placeholder="enter name" required><br>
	<input type="text" name="description" placeholder="enter description" required><br>
	<input type="text" name="amount" placeholder="enter amount" required><br>
		<input type="text" name="id" placeholder="id" required><br>
	
	</form>
</body>
</html>