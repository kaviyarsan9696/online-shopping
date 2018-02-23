<?php
if(isset($_REQUEST)){
	 $conn = mysqli_connect('localhost','root','welcome@123','onlineshopping');
  if (!$conn) {
    echo "database not connected"; 
  }

  $f_name=$_POST["f_name"];
  $l_name=$_POST["l_name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $repassword=$_POST["repassword"];
  $mobile=$_POST["mobile"];
  $address1=$_POST["address1"];
  $address2=$_POST["address2"];

    $name="/^[a-zA-Z]+$/";
   $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2,4})$/";
   $number = "/^[0-9]+$/";

  if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address1) || empty($address2)){
 	echo"
   		<div class='alert alert-warning'>
  			<a href='#' class= 'close' data-dismiss='alert' aria-label='close'>&times:</a>
  			<b>please fill all fields..!</b>
  		</div>
 	";
   	exit();
}
 
   if(!preg_match($name,$f_name)){
   	echo"
   		<div class='alert alert-warning'>
  			<a href='#' class= 'close' data-dismiss='alert' aria-label='close'>&times:</a>
  			<b>this $f_name is not valid</b>
  		</div>
 	";
  
    	exit();
    }
  if(!preg_match($name,$l_name)){
  	echo"
   		<div class='alert alert-warning'>
  			<a href='#' class= 'close' data-dismiss='alert' aria-label='close'>&times:</a>
  			<b>this $l_name is not valid</b>
  		</div>
 	";
  
  	exit();
   }
  if(!preg_match($emailValidation,$email)){
	echo"
   		<div class='alert alert-warning'>
  			<a href='#' class= 'close' data-dismiss='alert' aria-label='close'>&times:</a>
  			<b>this $email is not valid</b>
  		</div>
 	";
  
  	exit();
   }
   if(strlen($password)< 9){
  		echo"
   		<div class='alert alert-warning'>
  			<a href='#' class= 'close' data-dismiss='alert' aria-label='close'>&times:</a>
  			<b>Password is week</b>
  		</div>
 	";
  
  	exit();
  }
     if(strlen($repassword)< 9){
   echo"
   		<div class='alert alert-warning'>
  			<a href='#' class= 'close' data-dismiss='alert' aria-label='close'>&times:</a>
  			<b>Password is week</b>
  		</div>
 	";
  
  	exit();
    }
   if($password != $repassword){
   	echo"
   		<div class='alert alert-warning'>
  			<a href='#' class= 'close' data-dismiss='alert' aria-label='close'>&times:</a>
  			<b>Password is not same</b>
  		</div>
 	";
  
  	exit();
   }
   if(!preg_match($number, $mobile)){
   	echo"
   		<div class='alert alert-warning'>
  			<a href='#' class= 'close' data-dismiss='alert' aria-label='close'>&times:</a>
  			<b>Mobile number $mobile is not valid</b>
  		</div>
 	";
  
  	exit();
    	
   }
   if(!strlen($mobile) == 10){
   	echo"
   		<div class='alert alert-warning'>
  			<a href='#' class= 'close' data-dismiss='alert' aria-label='close'>&times:</a>
  			<b>Mobile number should be a 10 degit</b>
  		</div>
 	";
  
  	exit();
   }

   $sql = "SELECT `user_id` FROM `user_info` WHERE `email` = '$email' LIMIT 1";
   $check_query =mysqli_query($conn,$sql);
   $count_email = mysqli_num_rows($check_query);
   if($count_email > 0){
   		echo"
   		<div class='alert alert-danger'>
  			<a href='#' class= 'close' data-dismiss='alert' aria-label='close'>&times:</a>
  			<b>email address is already available try another email address</b>
  		</div>
 	";
  
  	exit();
   }else{
   	$password = md5($password);
   	$sql = "INSERT into `user_info` (`user_id`,`first_name`,`last_name`,`email`,`password`,`mobile`,`address1`,`address2`) VALUES (NULL,' $f_name','$l_name','$email','$password','$mobile','$address1','$address2')";
   	$run_query = mysqli_query($conn,$sql);
   	if($run_query){
   		echo"
   		<div class='alert alert-success'>
  			<a href='#' class= 'close' data-dismiss='alert' aria-label='close'>&times:</a>
  			<b>your registered successfully..!</b>
  		</div>
 	";  		
   	}
   }
}
?>