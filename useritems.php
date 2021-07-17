<?php

include 'database.php';




$name='name';
$description='description';
$amount='amount';
$img='image';
$img='name';

	
	
	
	$q= "SELECT * FROM images";
	
	$query = mysqli_query($con,$q);
	
?>

	



<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>useritems</title>
	 
</head>
<body>

<li><a href="userhome.php">HOME</a></li>
	<li><a href="useritems.php">MY SHOP</a></li>
	<li><a href="shops.php">SHOPS</a></li>
	<li><a href="reset.php">RESET PASSWORD</a></li>
	<li><a href="logout.php">LOGOUT</a></li>


<h2>ITEMS</h2>







<table>
  <tr style="color:blue">
    <th>id</th>
    <th>name</th>
	 <th>decription</th>
	 <th>amount</th>
    <th>imagename</th>
  </tr>
  
  
  

  
<?php

     include 'database.php';
	
	$q= "SELECT * FROM images";
	
	$query = mysqli_query($con,$q);
	
	while($res= mysqli_fetch_array($query)){
		
	
	
?>
 
  
  <tr style="color:black;text-align:center">
    <td><?php echo $res['id'];?></td>
    <td><?php echo $res['name'];?></td>
	<td><?php echo $res['description'];?></td>
	<td><?php echo $res['amount'];?></td>
	<td><?php echo '<img src ="upload' .$res['image'];?> "width="200px;" height="200px;" alt="image"> </td>
	<td><button><a href="delete.php?name=<?php echo $res['name'];?>">DELETE</a></button></td>
	<td><button><a href="update.php?name=<?php echo $res['name'];?>">UPDATE</a></button></td>
	
	
  </tr>
  
  <?php
  
    }
  ?>
  
</table>


	
</body>
</html>

















