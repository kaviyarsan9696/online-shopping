<!DOCTYPE html>
<html>
<head>
	<title>Online Shopping</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script type="text/javascript" src="jquery.js" ></script> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<a href="#" class="navbar-brand">online shopping</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			</ul>
		</div>
	</div>
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid">
	<div class="row">
			<div class="col-md-2"></div>
				<div class="col-md-8" id="signup_msg">
					
				</div>	
				<div class="col-md-2"></div>
			</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer SignUp Form</div>
					<div class="panel-body">
					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">	
							</div>
							<div class="col-md-6">
								<label for="l_name">Last Name</label>
								<input type="text" name="l_name" id="l_name" class="form-control">	
							</div>
						</div>	
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" name="email" id="Email" class="form-control">	
							</div>
						</div>	
						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" class="form-control">	
							</div>
						</div>	
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter password</label>
								<input type="password" name="repassword" id="repassword" class="form-control">	
							</div>
						</div>		
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" name="mobile" id="mobile" class="form-control">	
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address line 1</label>
								<input type="text" name="address1" id="address1" class="form-control">	
							</div>
						</div>	
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address line </label>
								<input type="text" name="address2" id="address2" class="form-control">	
							</div>
						</div>	
						<p><br></p>
						<div class="row">
							<div class="col-md-12">
								
								<input style="float: right;" value="Sign Up" type="button" name="signup_button" id="signup_button" class="btn btn-success btn-lg">	
							</div>
						</div>			
								
				</div>
				</form>
				<div class="panel-footer">jhkf</div>
			</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</body>
</html>