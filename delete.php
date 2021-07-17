<?php

 include 'database.php';
 
    $id= $_GET['id'];
	 $name= $_GET['name'];
	  $description= $_GET['description'];
	   $amount= $_GET['amount'];
	    $image= $_GET['image'];
    	
	$q= "DELETE FROM images WHERE name = '$name'";
	mysqli_query($con,$q);
	header('location:useritems.php');
?>