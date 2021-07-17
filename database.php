<?php

/*checking if it is connecting*/

$con= mysqli_connect("localhost","root","","market");
mysqli_select_db($con,"market");

	if($con){
		echo "";
	}else{
		echo "not connected";
	}

?>
