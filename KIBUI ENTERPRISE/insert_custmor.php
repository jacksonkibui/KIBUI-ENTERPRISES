<?php
include("connection.php");

	if(isset($_POST['addcust.php'])){

		$customer_id = htmlentities(mysqli_real_escape_string($con,$_POST['customer_id']));
		$cust_name = htmlentities(mysqli_real_escape_string($con,$_POST['cust_name']));
		$city = htmlentities(mysqli_real_escape_string($con,$_POST['city']));
		$grade = htmlentities(mysqli_real_escape_string($con,$_POST['grade']));
		$salesman_id= htmlentities(mysqli_real_escape_string($con,$_POST['salesman_id']));
		

		
$insert = "insert into customer (customer_id,cust_name,city,grade,salesman_id)
		values('$customer_id','$cust_name','$city','$grade','$salesman_id')";
		
		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Well Done, the record is saved.')</script>";
			echo "<script>window.open('oders.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Registration failed, please try again!')</script>";
			echo "<script>window.open('addcust.php', '_self')</script>";
		}
	}
?>