<?Php
session_start();
if (!isset($_SESSION['uid'])) {
	header("location:index.php");
}
?>
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
				<li><a href="profile.php"><span class="glyphicon glyphicon-home"></span>home</a></li>
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
		<div class="col-md-8" id="cart_msg">
			
		</div>
		
	</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2"><b>Action</b></div>
							<div class="col-md-2"><b>Product Image</b></div>
							<div class="col-md-2"><b>Product_Name</b></div>
							<div class="col-md-2"><b>Quantity</b></div>
							<div class="col-md-2"><b>Product_price</b></div>
							<div class="col-md-2"><b>Price in $</b></div>
						</div>
						<div id="cart_checkout"></div>
						<!-- <div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='kids.jpg'></div>
							<div class="col-md-2"><b>Product_Name</b></div>
							<div class="col-md-2"><input type='text' class='form-control' value="500" ></div>
							<div class="col-md-2"><input type='text' class='form-control' value="1" disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value="5000" disabled></div>
						</div> -->
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		
	</div>
</body>
</html>