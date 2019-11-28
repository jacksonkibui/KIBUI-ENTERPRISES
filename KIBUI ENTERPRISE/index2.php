
<!DOCTYPE html>
<html>
<Head>

<title> ag functions</title>
<link rel="stylesheet" href="bytes.css">
</head>
<body>

<div id="wrapper">

</div>
<div id="content"> 
<main>
<head>
	<title>order views</title>
<style>
body {
	color: white;
	text-align: center;
}
.kadogo{
	margin-left:auto;
	color:black;
	margin-right:auto;
	background-color:#B3C7E6;
	border-radius:30px;
	
}
.bg {
  /* The image used */
  background-image: url("https://images.pexels.com/photos/269583/pexels-photo-269583.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>

</head>
<body class="bg">
	

<div class="kadogo">
	<h3>DO THE CALCULATIONS FROM THE DATA BELOW </h3>
	<form action="index2.php" method="post">
	<select name="select" id="select">
	<option>average purch_amt</option>
	<option>sum purch_amt</option>
	<option>total salesman_id</option>
	<option>total customer</option>
	<option>highest purch_amt</option>
	<option>highest grade</option>
	<option>highest customer_id</option>
	<option>highest date</option>
	<option>salesman_id </option>
	<option>highest purchase amount</option>
<option>between purchase amount</option>
<select>
<input type="submit" name="save" value="check">
	</form>
<?php
error_reporting(0);
$check=$_POST['select'];
$connection = mysqli_connect("localhost","root","","buzina");

if(isset($_POST['save'])){
if($check==="average purch_amt"){
$result= mysqli_query($connection,"SELECT AVG(purch_amt)as avg FROM orders");
if (mysqli_num_rows($result)> 0) {
	
	while($row = mysqli_fetch_assoc($result)) {
		echo "average purch_amt:  " . $row["avg"]. "<br><br>";
	}}

else{
	echo"no reslut";
}} else if($check==="sum purch_amt"){
$result= mysqli_query($connection,"SELECT SUM(purch_amt)as sum FROM orders");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "sum purch_amt:  " . $row["sum"]. "<br><br>";
	}
} 
else{
	echo"no reslut";
}}
else if($check==="total salesman_id"){
$result= mysqli_query($connection,"SELECT COUNT(DISTINCT salesman_id)as count FROM orders");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo " total salesman_id:  " . $row["count"]. "<br><br>";
	}
} 
else{
	echo"no reslut";
}}
else if($check==="total customer"){
$result= mysqli_query($connection,"SELECT COUNT(*)as count FROM customer");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo " total customer:  " . $row["count"]. "<br><br>";
	}
} 
else{
	echo"no reslut";
}}
else if($check==="highest purch_amt"){
$result= mysqli_query($connection,"SELECT MAX(purch_amt)as max FROM orders");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "highest purch_amt:  " . $row["max"]. "<br><br>";
	}
} 
else{
	echo"no reslut";
}}
else if($check==="highest grade"){
$result= mysqli_query($connection,"SELECT city,MAX(grade)as max FROM customer GROUP BY city");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo " highest grade:  " . $row["max"]. "<br><br>";
	}
} 
else{
	echo"no reslut";
}}
else if($check==="highest customer_id"){
$result= mysqli_query($connection,"SELECT customer_id,MAX(purch_amt)as max FROM orders GROUP BY customer_id");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo " highest customer_id:  " . $row["max"]. "<br><br>";
	}
} 
else{
	echo"no reslut";
}}
else if($check==="highest date"){
$result= mysqli_query($connection,"SELECT customer_id,ord_date,MAX(purch_amt)as max FROM orders GROUP BY customer_id");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo " highest date:  " . $row["max"]. "<br><br>";
	}
} 
else{
	echo"no reslut";
}}
else if($check==="salesman_id "){
$result= mysqli_query($connection,"SELECT salesman_id,MAX(purch_amt)as max FROM orders");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo " salesman_id :  " . $row["max"]. "<br><br>";
	}
} 
else{
	echo"no reslut";
}}
else if($check==="salesman_id "){
$result= mysqli_query($connection,"SELECT salesman_id,MAX(purch_amt)as max FROM orders");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo " salesman_id :  " . $row["max"]. "<br><br>";
	}
} 
else{
	echo"no reslut";
}
}
else if($check==="highest purchase amount"){
$result= mysqli_query($connection,"SELECT customer_id,ord_date,MAX(purch_amt)as max FROM orders GROUP BY customer_id,ord_date HAVING MAX(purch_amt)>2000.00");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo " highest purchase amount:  " . $row["max"]. "<br><br>";
	}
} 
else{
	echo"no reslut";
}}
else if($check==="between purchase amount"){
$result= mysqli_query($connection,"SELECT customer_id,ord_date,MAX(purch_amt)as max FROM orders GROUP BY customer_id,ord_date HAVING MAX(purch_amt) BETWEEN 2000 AND 6000");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "between purchase amount:  " . $row["max"]. "<br><br>";
	}
} 
else{
	echo"no reslut";
}
}
}

?>

</body>
</html>