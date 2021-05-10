<?php

include "conn.php";


if(isset($_POST['send'])){

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

$sql = "INSERT INTO feedback (name,email,message) VALUES ('$name','$email','$message')";

$query =mysqli_query($conn, $sql);
if ($query) {

  echo "<alert>new feedback arrived please check it it maybe urgent !!!</alert>";
} else {
  echo "<alert>You cann't add feedback right now sorry !!!</alert>"; 
header("contact.php");
exit();
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

    
    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

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



    <div class="slide-item overlay" style="background-image: url('images/redesignarticle_codev.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center text-center mx-auto">
            <h1 class="heading mb-5">Contact Us</h1>
            <!--<p><a href="#" class="btn btn-primary">Get started</a></p>-->
          </div>
        </div>
      </div>  
    </div>


    <div class="site-section pb-0">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 pr-md-7 mb-5">
            <form class="form-horizontal" role="form" name="form1" onSumbit="return validateForm();" enctype="multipart/form-data" action="contact.php" method="post">
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" required="required">
              </div>
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" required="required">
              </div>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" required="required" ></textarea>
              </div>
              <div class="form-group">
                <button type="submit" name="send" class="btn btn-primary py-3 px-5" value="Send Message">Send-Feedback</button>
              </div>
            </form>
          </div>
          <div class="col-md-5">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="icon-room text-primary"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4"> Kirkos Sub City, Addis Ababa, Ethiopia</h3>
              </div>
            </div> <!-- .block-icon-1 -->

            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="icon-phone text-primary"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">+25111-5-524122</h3>
              </div>
            </div> <!-- .block-icon-1 -->

            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="icon-envelope text-primary"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">contactefda@efda.gov.et</h3>
              </div>
            </div> <!-- .block-icon-1 -->

          </div>
        </div> <!-- .row -->

      </div>
    </div> <!-- .templateux-section -->

  
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
       function validateForm()
{

  var str=document.form1.name.value;
  var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  //comparing user input with the characters one by one
  for(i=0;i<str.length;i++)
  {
  //charAt(i) returns the position of character at specific index(i)
  //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
  if(valid.indexOf(str.charAt(i))==-1)
  {
  alert(" Name Cannot Contain Numerical Values");
  document.form1.name.value="";
  document.form1.name.focus();
  return false;
  }}
  
if(document.form1.name.value=="")
{
alert(" Name Field is Empty");
return false;
}

if(document.form1.email.value=="")
{
alert("Email Field is Empty");
return false;
}
var reg= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
// /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/ is regular expresion for email id
var address= document.form1.email.value;
// the test() mathod tests for a match in a string. this method returs true if it finds a match, otherwise it returns false
if (reg.test(address)==false){
alert("Invalid Email Address");
return false;
} 
var str=document.form1.message.value;
  var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  //comparing user input with the characters one by one
  for(i=0;i<str.length;i++)
  {
  //charAt(i) returns the position of character at specific index(i)
  //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
  if(valid.indexOf(str.charAt(i))==-1)
  {
  alert("Last Name Cannot Contain Numerical Values");
  document.form1.message.value="";
  document.form1.message.focus();
  return false;
  }}

}

    </script>
  </body>
  </html>