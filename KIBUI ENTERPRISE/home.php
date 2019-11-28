<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>home page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
 
  <link rel="stylesheet" href="simple-sidebar.css" >

</head>
<style>
.topnav {
  overflow: hidden;
  background-color: NULL;
}

.topnav a {
  float: left;
  color: WHITE;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:BLUE;
  color:BLUE;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
    .container-fluid{

    }
    p {
  font-style: italic;
  font-size: 40px;
}
h1 {
  font-style: italic;
  font-size: 60px;}
    .bg {
  /* The image used */
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYKl00_45wQgmB9AMd1phF33MpH1148VujzcSNujHhfbF3_plZFg&s");
  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>
    
<body class="bg">

<div class="topnav">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading" style="color:yellow;" font-family: 'Anton';font-size: 22px;>KIBUI ENTERPRISES </div>
      <div class="list-group list-group-flush">
        
        <a href="index2.php" class="list-group-item list-group-item-action bg-light" style="color:white;">Trasaction tables </a>
        <a href="index.php" class="list-group-item list-group-item-action bg-light" style="color:white;">BUTTONS</a>
        <a href="triggers.php" class="list-group-item list-group-item-action bg-light" style="color:white;">TRIGGERS EVENTS</a>
        <<a href="ADDCUST.php" class="list-group-item list-group-item-action bg-light" style="color:white;">NEW CUSTOMER</a>
      
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
   
        
           
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="signin.php" style="color:white;">log out</a>
                

                
           
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4" style="color:white;">lwack entertainers </h1>
        <p style="color:white;">buy and sell</p>
        <p></p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
