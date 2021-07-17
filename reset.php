<?php


include 'database.php';
	
if(isset($_POST['submit'])){	

    $id = $_POST['id'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	
	
		
	$q= "UPDATE usertable set password= '$password' WHERE id='$id' && name = '$name'";
	
	$query = mysqli_query($con,$q);
	
	
	header('location:login.php');
	
}


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registeration</title>
</head>
<body>
	<li><a href="userhome.php">HOME</a></li>
	<li><a href="useritems.php">MY SHOP</a></li>
	<li><a href="shops.php">SHOPS</a></li>
	<li><a href="reset.php">RESET PASSWORD</a></li>
	<li><a href="logout.php">LOGOUT</a></li>
	
	<form action="" method="POST">
	<input type="text" name="id" placeholder="enter id" required><br>
	<input type="text" name="name" placeholder="enter name" required><br>
	<input type="text" name="password" placeholder="enter password" required><br>
	<input type="submit" name="submit" value="submit"><br>
	</form>
</body>
</html>