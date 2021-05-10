<?php 
 session_start();
include "conn.php";



 $username=trim($_POST['username']);
 $password=trim($_POST['password']);

if(isset($_POST['login'])){
  
  $sql="select * from admin where username='$username' and password = '$password'";
        $query =mysqli_query($conn, $sql);

         if(mysqli_num_rows($query) > 0){
      
    while($row=mysqli_fetch_assoc($query)){

      $name=$row['username'];
      $pass=$row['password'];
     if ($name==$username && $pass==$password) {
      
       # code...
     
      $_SESSION['username'] =$name;
      $_SESSION['password'] =$pass ;
      header("location: adminpage.php");
      exit();
     
     }
      
       
     else {
             
           echo"<alert>Please Try again ! Your UserName or Password is Incorrect </alert>";

          }   
               }
           
           }
      
      }   
      
if(isset($_POST['login'])){

  
  $sql="select * from orguser where username='$username' and password = '$password'";
        $query =mysqli_query($conn, $sql);

         if(mysqli_num_rows($query) > 0){
      
    while($row=mysqli_fetch_assoc($query)){

      $name=$row['username'];
      $pass=$row['password'];
     if ($name==$username && $pass==$password) {
      
       # code...
     
      $_SESSION['username'] =$name;
      $_SESSION['password'] =$pass ;
      header("location: orguser.php");
      exit();
     
     }
      
       
     else {
             
            echo"<alert>Please Try again ! Your UserName or Password is Incorrect </alert>";

          }   
               }
           
           }
      
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

    
    <header class="site-navbar bg-dark light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="index.php" class="mb-0">Product Expiry<span class="text-primary">.</span> </a></div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link ">Home</a></li>
               
                <li><a href="service.php" class="nav-link">Services</a></li>
               <li><a href="Login.php" class="nav-link">Login</a></li>
                <li><a href="about.php" class="nav-link">About Us</a></li>

            
                <li><a href="contact.php" class="active nav-link">Contact</a></li>

                
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header>


    <!-- MAIN -->



    <div class="slide-item overlay">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center text-center mx-auto">
            <h1 class="heading mb-5"></h1>
            <form action="Login.php" method="post" name="form1" onSubmit="return validateForm();">
              <div class="form-group">
                <label for="username">UserName :</label>
                <input type="text" class="form-control" name="username" id="username" required="required">
              </div>
              <div class="form-group">
                <label for="password" color="white">Password :</label>
                <input type="password" name="password" class="form-control" id="password" required="required">
              </div>
              <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary py-3 px-5" value="Log In">
               
          </div>
          <a href="signup.php">Sign-up</a><br>
               <a href="forgetp.php">Forgotten Password ?</a>
        </div>
      </div>  
    </div>

   

    <footer class="footer-section">
      <div class="container">
       <div class="row">

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
  function validateForm()
{


//for alphabet characters only
var str=document.form1.username.value;
  var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ 0123456789";
  //comparing user input with the characters one by one
  for(i=0;i<str.length;i++)
  {
  //charAt(i) returns the position of character at specific index(i)
  //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
  if(valid.indexOf(str.charAt(i))==-1)
  {
  alert("username Cannot Contain  other Values");
  document.form1.username.value="";
  document.form1.username.focus();
  return false;
  }}
  
}
</script>

  </body>
  </html>