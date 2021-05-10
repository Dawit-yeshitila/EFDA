<?php
include"conn.php";
$sql="select * from medicine";
$query =mysqli_query($conn, $sql);
 $increment=0;
$today=date("Y-m-d");
 if(mysqli_num_rows($query) > 0){
 while ($row = mysqli_fetch_array($query)) {
    # code..
   if($row['expireddate'] < $today){
      # code...
      $increment++;
    }

  }


 }
$sql1="select * from food";
$query =mysqli_query($conn, $sql1);
// $increment=0;
//$today=date("Y-m-d");
 if(mysqli_num_rows($query) > 0){
 while ($row = mysqli_fetch_array($query)) {
    # code..
   if($row['expireddate'] < $today){
      # code...
      $increment++;
    }

  }


 }
/* if (isset($_POST['expired'])) {

if(mysqli_num_rows($query) > 0){
 while ($row = mysqli_fetch_array($query)) {

 $increment--;
 }
}

 }
*/
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

    
    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="index.php" class="mb-0">Product Expiry<span class="text-primary">.</span> </a></div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link active">Home</a></li>

                 <li><a href="service.php" action="service.php" class="nav-link">Services</a></li>
                  <li><form method="Post" action="index.php">
                <button type="submit" class="btn btn-primary" name="expired">
                    Notifications <span class="badge badge-light" name="increase"><?php echo $increment;?></span>
                  </button></form></li>
               <li><a href="Login.php" class="nav-link">Login</a></li>
                <li><a href="about.php" class="nav-link">About Us</a></li>

       
                <li><a href="contact.php" class="nav-link">Contact</a></li>

                
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header>


    <!-- MAIN -->



    <div class="slide-item overlay" style="background-image: url('images/banner5.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <h1 class="heading mb-5">We Provide Way to Protect Your Self From UnHealthy Products</h1>
           <!-- <p><a href="#" class="btn btn-primary">Get started</a></p>-->
          </div>
        </div>
      </div>  
    </div>



    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">Information About </span>
            <h2 class="heading"><strong class="text-primary">Healthy Products and</strong> Having Good Way of Life...</h2>
          </div>
        </div>

      
      </div>
    </div>
   <center>
     <?php
include "conn.php";

$query="select * from tip";
$query =mysqli_query($conn, $query);

 if(mysqli_num_rows($query) > 0){
  echo "<center>";
  echo"<table class='table table-hover'>";
/*  echo"<thead>
                   <tr>
                      <th>ID</th> 
                      <th>Tip-Post</th>
                    
                      
                    </tr>    
              </thead>  ";*/
while($row = mysqli_fetch_array($query)) {

echo "


          <div class='col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4'>
               <tr>
                <td> <h5 >".$row['id']."</h5><td>
                <p>".$row['tip']."</p></td>
               </tr>
              
            </div>
          </div>
        ";
}
echo "</table>";
echo "</center>";
}
 ?>
</center>
 <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">Expired </span>
            <h2 class="heading"><strong class="text-primary">Product Will be</strong> Displayed Down Here </h2>
          </div>
        </div>

      
      </div>
    </div>
<?php

if (isset($_POST['expired'])) {

   # code...
  $query =mysqli_query($conn, $sql);
  if(mysqli_num_rows($query) > 0){
    echo"<table class='table table-hover'>";
 /*   echo"<thead>
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
 while ($row = mysqli_fetch_array($query)) {
if($row['expireddate'] < $today){
      # code...
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
              </tr>
            </div>
          </div>
        ";
    }

 }
echo "</table>";

}
$query =mysqli_query($conn, $sql1);
  if(mysqli_num_rows($query) > 0){
    echo"<table class='table table-hover'>";
 while ($row = mysqli_fetch_array($query)) {
if($row['expireddate'] < $today){
      # code...
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
              </tr>
            </div>
          </div>
        ";
    }

 }
echo "</table>";

}
 }



?>
    <footer class="footer-section">
      <div class="container">
      <!-- <div class="row">
       
         <div class="col-lg-3">
            <h2 class="footer-heading mb-4">Navigation</h2>
            <ul class="list-unstyled">
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Customer Care</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">Social</h2>
            <div class="social mb-5">
              <a href="#" class=""><span class="icon-facebook"></span></a>
              <a href="#" class=""><span class="icon-twitter"></span></a>
              <a href="#" class=""><span class="icon-linkedin"></span></a>
              <a href="#" class=""><span class="icon-instagram"></span></a>
            </div>

           
          </div>
        </div>-->

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


  </body>
  </html>