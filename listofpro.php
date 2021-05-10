<?php
session_start();
include "conn.php";
if( !isset($_SESSION['username']) && !isset($_SESSION['password'])){
  
   header('location:login.php');
 exit();
}

  $id = trim($_POST['id']);
  $uptip=trim($_POST['tip']);
  $product = trim($_POST['product']);
  
  if ($product=='medicine') {
    # code...
    if(isset($_POST['del'])){

  $sql = "DELETE from tip where id = '$id'"; 
  
  $query =mysqli_query($conn, $sql);
      if ($query)
      {
      echo "<alert>
  successfully deleted !
 </alert>"; 

      }
 }

/*if(isset($_POST['update'])){

  $sql = "UPDATE tip SET tip ='$uptip' where id = '$id'"; 
  
  $query =mysqli_query($conn, $sql);
      if ($query)
      {
      echo "<alert>
  successfully Updated !
</alert>"; 

      }
 }*/
  }
  if ($product=='food') {
    # code...
    if(isset($_POST['del'])){

  $sql = "DELETE from food where id = '$id'"; 
  
  $query =mysqli_query($conn, $sql);
      if ($query)
      {
      echo "<alert>
  successfully deleted !
 </alert>"; 

      }
 }

/*if(isset($_POST['update'])){

  $sql = "UPDATE tip SET tip ='$uptip' where id = '$id'"; 
  
  $query =mysqli_query($conn, $sql);
      if ($query)
      {
      echo "<alert>
  successfully Updated !
</alert>"; 

      }
 }*/

  }

?>
<!doctype html>
<html lang="en">
<head>
<title>Expiry Reminder&mdash; Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    
    <header class="site-navbar light js-sticky-header site-navbar-target bg-dark" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="adminpage.php" color="text-black" class="mb-0">Product Expiry Admin Page<span class="text-primary">.</span> </a></div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="adminpage.php" class="nav-link active">Home</a></li>

                
                 <li><a href="register.php" class="nav-link">Register Products</a></li>
               <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Options</a>
          <div class="dropdown-menu">
               <a class="dropdown-item" class="nav-link" href="tips.php">Post Tips</a>
               <a class="dropdown-item" class="nav-link" href="addadmin.php">Add Admin</a>
                <a class="dropdown-item" class="nav-link" href="listofpro.php">List of Products</a>
                <a class="dropdown-item" class="nav-link" href="replym.php">Message</a>
               <a class="dropdown-item" class="nav-link" href="Feedback.php">FeedBack</a>
              
               <a class="dropdown-item" class="nav-link" href="logout.php">LogOut</a>
      </div>
          </li>

                
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header>


    <!-- MAIN -->


  <div class="site-section bg-light">
      <div class="container">
        <div class="jumbotron">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center mb-5">
            <span class="subheading">Please Select </span>
            <h2 class="heading"><strong class="text-primary">What You Want To </strong>Display From Category !</h2>
          </div>
        </div>
         </div>
         <div class="site-section pb-0">
            <div class="container">
            <div class="row mb-5">
          <div class="col-md-7 pr-md-7 mb-5">
            <form action="service.php" method="post"> 
              <div class="input-group">
                <input type="search"  name="searchvar" class="form-control rounded" placeholder="Search.." aria-label="Search" aria-describedby="search-addon" />
               <button type="submit" name="search" class="btn btn-primary">search</i></button>
              </div>
            </form>
              </div>
            </div>
          </div>
        </div>
 <div class="site-section pb-0">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 pr-md-7 mb-5">
            <form class="form-horizontal" role="form" enctype="multipart/form-data" action="listofpro.php" method="post" id="show">
              <div class="form-group">
                <label for="product">Product Category: </label>
              <select name="product" id="product" form="show" required="required">
               <option value="medicine">Medicine</option>
               <option value="food">Food and Drink</option>
              </select>
              </div>
              <div class="form-group">
                <button type="submit" name="post" class="btn btn-primary py-3 px-5" value="post">View</button>
              </div>
            </form>
          </div>
          </div>
          </div>
          </div>


         <?php
include "conn.php";


$search=trim($_POST['searchvar']);

if (isset($_POST['search'])) {

$sql="select * from medicine where name='$search' UNION SELECT * FROM food where name='$search'";
$query =mysqli_query($conn, $sql);

 if(mysqli_num_rows($query) > 0){
  echo"<table class='table table-hover'>";
/*  echo"<thead>
                   <tr>
                      <th>ID</th> 
                      <th>Product-Name</th>
                      <th>Description</th>
                      <th>Manufacturer-Name</th>
                      <th>Manufactured-Date</th>
                      <th>Expired-Date</th>
                      <th>Category</th>
                      
                    </tr>    
              </thead>  ";*/
while($row = mysqli_fetch_array($query)) {

echo "
        <div class='col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4'>
               <tr>
                <td> <h5 >".$row['id']."</h5><td>
               <td> <p>".$row['name']."</p></td>
               <td> <p>".$row['description']."</p></td>
               <td> <p>".$row['manufacturername']."</p></td>
               <td><p>".$row['manufactureddate']."</p></td>
               <td> <p>".$row['expireddate']."</p></td>
               <td> <p>".$row['category']."</p></td>   
               <form method='post' action='listofpro.php'>
    <input type='hidden' value=".$row['id']." name='id'>
    <td><button name='del' type='submit' value='Delete' class='btn btn-warning' onclick='return Delete()'>DELETE</button></td>
    <td><button name='update' type='submit' value='Update' class='btn btn-warning' onclick='return Update()'>Update</button></td>
    </form>
              </tr>
            </div>
          </div>
        ";
}
echo "</table>";
}
}




if(isset($_POST['post'])){

$product = trim($_POST['product']);

if ($product=='medicine') {
  # code...
  $query="select * from medicine";
$query =mysqli_query($conn, $query);

 if(mysqli_num_rows($query) > 0){
  echo"<table class='table table-hover'>";
  /*echo"<thead>
                   <tr>
                      <th>ID</th> 
                      <th>Product-Name</th>
                      <th>Description</th>
                      <th>Manufacturer-Name</th>
                      <th>Manufactured-Date.</th>
                      <th>Expired-Date</th>
                      <th>Category</th>
                      
                    </tr>    
              </thead>  ";*/
while($row = mysqli_fetch_array($query)) {

echo "
        <div class='col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4'>
               <tr>
                <td> <h5 >".$row['id']."</h5><td>
               <td> <p>".$row['name']."</p></td>
               <td> <p>".$row['description']."</p></td>
               <td> <p>".$row['manufacturername']."</p></td>
               <td><p>".$row['manufactureddate']."</p></td>
               <td> <p>".$row['expireddate']."</p></td>
               <td> <p>".$row['category']."</p></td>   
              <form method='post' action='listofpro.php'>
    <input type='hidden' value=".$row['id']." name='id'>
    <td><button name='del' type='submit' value='Delete' class='btn btn-warning' onclick='return Delete()'>DELETE</button></td>
    <td><button name='update' type='submit' value='Update' class='btn btn-warning' onclick='return Update()'>Update</button></td>
    </form></tr>
            </div>
          </div>
        ";
}
echo "</table>";
}
}
if ($product=='food') {
  # code...
  $query="select * from food";
$query =mysqli_query($conn, $query);

 if(mysqli_num_rows($query) > 0){
  echo"<table class='table table-hover'>";
 /* echo"<thead>
                   <tr>
                      <th>ID</th> 
                      <th>Product-Name</th>
                      <th>Description</th>
                      <th>Manufacturer-Name</th>
                      <th>Manufactured-Date.</th>
                      <th>Expired-Date</th>
                      <th>Category</th>
                      
                    </tr>    
              </thead>  ";*/
while($row = mysqli_fetch_array($query)) {

echo "
        <div class='col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4'>
               <tr>
                <td> <h5 >".$row['id']."</h5><td>
               <td> <p>".$row['name']."</p></td>
               <td> <p>".$row['description']."</p></td>
               <td> <p>".$row['manufacturername']."</p></td>
               <td><p>".$row['manufactureddate']."</p></td>
               <td> <p>".$row['expireddate']."</p></td>
               <td> <p>".$row['category']."</p></td>
               
              <form method='post' action='listofpro.php'>
    <input type='hidden' value=".$row['id']." name='id'>
    <td><button name='del' type='submit' value='Delete' class='btn btn-warning' onclick='return Delete()'>DELETE</button></td>
    <!--<td><button name='update' type='submit' value='Update' class='btn btn-warning' onclick='return Update()'>Update</button></td>-->
    </form></tr>
            </div>
          </div>
        ";
}
echo "</table>";
}
}

}
 ?>
     

    

    <footer class="footer-section">
      <div class="container">
      
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright"><small>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Project is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by Final Year Project Members !</a></small></p>

              </div>
            </div>

          </div>
        </div>
      </footer>

    </div> <!-- .site-wrap -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
   

   <script src="js/main.js"></script>
    <script type="text/javascript">
      
 function Delete() {
            return confirm('Would you like to delete An Item ?');
        }

 function Update() {
            return confirm('Would you like to update an Item ?');
        }
    </script>

  </body>
  </html>