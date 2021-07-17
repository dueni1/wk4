<?php


include 'database.php';
	
if(isset($_POST['submit'])){	

    $id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$amount = $_POST['amount'];

	

	
	

	$q= "UPDATE images set name= '$name', id='$id', description='$description', amount='$amount' WHERE name='$name'";
	
	$query = mysqli_query($con,$q);
	
		$_SESSION['message']="added";
	$_SESSION['msg_type']="warning";
	
	header('location:useritems.php');
	
}


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registeration</title>
</head>
<body>
	
	
	<form action="userhome.php" method="POST" enctype="multipart/form-data">
	
	<h1>ITEMS</h1>
	
	
	<input type="file" name="image" style=""><br>
	
	
    <br><input type="submit" id="insert" name="submit" value="upload" style=""><br>
	<br><input type="text" name="name" placeholder="enter name" required><br>
	<input type="text" name="description" placeholder="enter description" required><br>
	<input type="text" name="amount" placeholder="enter amount" required><br>
	<input type="text" name="id" placeholder="id" required><br>
	
	</form>
</body>
</html>