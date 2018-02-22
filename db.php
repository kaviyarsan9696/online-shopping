<?php 
	$con = mysqli_connect('localhost','root','welcome@123','onlineshopping')
	if($con){
		die ("connection failed:".mysqli_connect_error());
	}
 ?>