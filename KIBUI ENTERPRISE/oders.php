<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sample PHP Database Application</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
</head>
<style>
	.bg {
  /* The image used */
  background-image: url("img/anu.jpg");
  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<header>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				ADD 
				
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Add customer  information</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">So</a>
              </div>
            </li>
          </ul>
		</div>
	</header>
<body class="bg">
	

  <?php
  
  //Change the password to match your configuration
  $link = mysqli_connect("localhost", "root", "", "buzina");
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  echo "<br>";
  
  
  $sql = "SELECT * FROM orders";
  $result = $link->query($sql);
	
	
  echo "";
	echo "<div class='container'>";
		echo "<div class='row-fluid'>";
		
			echo "<div class='col-xs-6'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>ord_No</th>";
				echo "<th>purch_amt</th>";
				echo "<th>ord_date</th>";
				echo "<th>customer_id</th>";
				echo "<th>salesman_id</th>";
				
				echo "</tr>";
		  
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["ord_No"] . "</td>";
						echo "<td>" . $row["purch_amt"] . "</td>";
						echo "<td>" . $row["ord_date"] . "</td>";
						echo "<td>" . $row["customer_id"] . "</td>";
						echo "<td>" . $row["salesman_id"] . "</td>";
						
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
				
				echo "</table>";

				
				
				
				$sql = "SELECT * FROM salesman";
				$result = $link->query($sql);
				
				
				echo "<table class='table table-hover table-inverse'>";
				
				
				echo "<tr>";
				echo "<th>Salesman_ID</th>";
				echo "<th>Name</th>";
				echo "<th>City</th>";
				echo "<th>Commission</th>";
				
				echo "</tr>";
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["Salesman_ID"] . "</td>";
						echo "<td>" . $row["name"] . "</td>";
						echo "<td>" . $row["city"] . "</td>";
						echo "<td>" . $row["commission"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
				
				echo "</table>";
			echo "</div>";
			echo "</div>";
			/*
			 * second table
			 */

			$sql = "SELECT * FROM customer";
			$result = $link->query($sql);
		
			echo "<div class='row-fluid'>";
			
				echo "<div class='col-xs-6'>";
				echo "<div class='table-responsive'>";
				
					echo "<table class='table table-hover table-inverse'>";
					
					echo "<tr>";
					echo "<th>customer_id</th>";
					echo "<th>cust_name</th>";
					echo "<th>city</th>";
					echo "<th>grade</th>";
					echo "<th>salesman_id</th>";
					echo "</tr>";
				
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
								
							echo "<tr>";
							echo "<td>" . $row["customer_id"] . "</td>";
							echo "<td>" . $row["cust_name"] . "</td>";
							echo "<td>" . $row["city"] . "</td>";
							echo "<td>" . $row["grade"] . "</td>";
							echo "<td>" . $row["salesman_id"] . "</td>";
							echo "</tr>";			
						}
					} else {
						echo "0 results";
					}
				
					echo "</table>";
				
				echo "</div>";
				echo "</div>";
				
		
		/*
		 * second row
		 */
	
		$sql = "SELECT * FROM emp_department";
		$result = $link->query($sql);
	
		echo "<div class='row-fluid'>";
		
			echo "<div class='col-xs-6'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>Dpt_Code</th>";
				echo "<th>DPT_NAME</th>";
				echo "<th>DPT_ALLOTMENT</th>";
				echo "</tr>";
			
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["Dpt_Code"] . "</td>";
						echo "<td>" . $row["DPT_NAME"] . "</td>";
						echo "<td>" . $row["DPT_ALLOTMENT"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
			
				echo "</table>";
			
			echo "</div>";
			echo "</div>";
			
			/*
			 * second table
			 */
			$sql = "SELECT * FROM `item_mast";
			$result = $link->query($sql);
				
	
			echo "<div class='col-xs-6'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>Product Id</th>";
				echo "<th>Product NAME</th>";
				echo "<th>Product PRICE</th>";
				echo "<th>Product COM</th>";
				echo "</tr>";
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["Pro_Id"] . "</td>";
						echo "<td>" . $row["PRO_NAME"] . "</td>";
						echo "<td>" . $row["PRO_PRICE"] . "</td>";
						echo "<td>" . $row["PRO_COM"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
			
				echo "</table>";
			echo "</div>";
			echo "</div>";
		echo "</div>";
		
	echo "</div>";
  // Close connection
  mysqli_close($link);
  ?>


</body>
</html>