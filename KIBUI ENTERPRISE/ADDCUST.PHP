<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #187FAB;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	.bg {
  /* The image used */
  background-image: url("data:image/jpeg;base64,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");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
 .main-content{
  /* The image used */
  background-image: url("https://www.videobacks.com/static/preview0/stock-video-premium-4k-video-loop-001-100166.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.col-sm-12 {
   font-family: myFirstFont;
   src: url(sansation_bold.woff);
   font-weight: bold;
}

</style>
<body class="bg">
<div class="row">
	<div class="col-sm-12">
		<div class="well">
			<center><h1 style="color: white;">CUSTOMER DETAILS</h1></center>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>WELCOME ON BOARD</strong></h3>
				<hr>
			</div>
			<div class="l-part">
				<form action="" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="customer id" name="customer_id" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder=" NAME" name="cust_name" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
						<select class="form-control" name="city" required="required">
							<option disabled>HOME TOWN</option>
							<option>CAIRO</option>
							<option>NEW YORK</option>
							<option>BRASIL</option>
							<option>KAMPALA</option>
							<option>DODOMA</option>
							<option>NAIROBI</option>
							<option>MOMBASA </option>
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input class="form-control" placeholder="grade" name="grade" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input  class="form-control" placeholder="salesman id" name="salesman_id" required="required">
					</div><br>
					
					
					

					<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">add</button></center>
					<?php include("insert_custmor.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>