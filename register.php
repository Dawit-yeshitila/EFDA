<?php
session_start();
include "conn.php";
if( !isset($_SESSION['username']) && !isset($_SESSION['password'])){
  
   header('location:login.php');
 exit();
}

if(isset($_POST['register'])){

$id = trim($_POST['id']);
$name = trim($_POST['name']);
$description = trim($_POST['description']);
$manufactname = trim($_POST['manufacturername']);
$manufactdate = trim($_POST['manufactureddate']);
$expireddate = trim($_POST['expireddate']);
$product = trim($_POST['product']);
$today=date('Y-m-d');

if ($manufactdate<$today && $manufactdate<$expireddate) {
  # code...
if ($product=='medicine') {
  # code...
  $sql = "INSERT INTO medicine (id,name,description,manufacturername,manufactureddate,expireddate,category) VALUES ('$id','$name','$description','$manufactname','$manufactdate','$expireddate', '$product')";

$query =mysqli_query($conn, $sql);
if ($query) {

  echo "<alert>Medicine Item Added successfully ! </alert";
 
 

} else {
  echo "<alert>Medicine Item Cannot be Added please try again ! </alert";
}
}
if ($product=='food') {
  # code...
  $sql = "INSERT INTO food (id,name,description,manufacturername,manufactureddate,expireddate,category) VALUES ('$id','$name','$description','$manufactname','$manufactdate','$expireddate', '$product')";

$query =mysqli_query($conn, $sql);
if ($query) {

  echo "<alert>Food or drink Item Added successfully ! </alert";
  

} else {
  echo "<alert>Food or drink Item Cnnot be Added try Again ! </alert";

}
}

}
else{

  echo("<alert>Manufactured Date should be less than Expired Date Try Again !");
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

    
    <header class="site-navbar light js-sticky-header site-navbar-target bg-dark" role="banner">
<div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="adminpage.php" class="mb-0">Product Expiry Admin Page<span class="text-primary">.</span> </a></div>
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


   
    <div class="site-section pb-0">
      <div class="container">
        <div class="col-lg-7 mx-auto text-center mb-5">
            <span class="subheading">Please, Register Legal Products !</span>
            <h2 class="heading"><strong class="text-primary">Registeration</strong> Form</h2>
          </div>
        <div class="row mb-5">
          <div class="col-md-7 pr-md-7 mb-5">
            <form action="register.php" method="post" name="form1" id="reg"  onSubmit="return validateForm();">
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="id">Id</label>
                <input type="text" name="id" class="form-control" id="id" required="required">
              </div>
              <div class="form-group col-md-6">
                <label for="name">Product-Name</label>
                <input type="text" name="name" class="form-control" id="name" required="required">
              </div>
              </div>
                   
              <div class="form-group">
                <label for="manufacturername">Manufacturer Name</label>
                <input type="text" name="manufacturername" class="form-control" id="manufacturername" required="required">
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="manufactureddate">Manufactured Date</label>
                <input type="date" name="manufactureddate" class="form-control" id="manufactureddate" required="required">
              </div>
              <div class="form-group col-md-6">
                <label for="expireddate">Expired Date</label>
                <input type="date" name="expireddate" class="form-control" id="expireddate" required="required">
              </div>
              </div>
         
              <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" name="description" cols="10" rows="10" class="form-control" id="description" required="required"></textarea>
              </div>
              
              </div>
             <!-- <div class="form-group">
                <label for="name">OCR Image</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="name">Image</label>
                <input type="text" class="form-control" id="name">
              </div>-->
              <div class="form-group">
                <label for="product">Product Category: </label>
              <select name="product" id="product" form="reg" required="required">
               <option value="medicine">Medicine</option>
               <option value="food">Food and Drink</option>
              </select>
              </div>
              <div class="form-group">
                <button type="submit" name="register" class="btn btn-primary" value="Register">Register</button>
              </div>
            </form>
            
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

//for alphabet characters only
var str=document.form1.name.value;
  var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  //comparing user input with the characters one by one
  for(i=0;i<str.length;i++)
  {
  //charAt(i) returns the position of character at specific index(i)
  //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
  if(valid.indexOf(str.charAt(i))==-1)
  {
  alert("Product name Cannot Contain Numerical Values");
  document.form1.name.value="";
  document.form1.name.focus();
  return false;
  }}
  
if(document.form1.name.value=="")
{
alert("Product name Field is Empty");
return false;
}


  
  //for alphabet characters only
var str=document.form1.manufacturername.value;
  var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  //comparing user input with the characters one by one
  for(i=0;i<str.length;i++)
  {
  //charAt(i) returns the position of character at specific index(i)
  //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
  if(valid.indexOf(str.charAt(i))==-1)
  {
  alert("manufacturer-name Cannot Contain Numerical Values");
  document.form1.manufacturername.value="";
  document.form1.manufacturername.focus();
  return false;
  }}

var str=document.form1.description.value;
  var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  //comparing user input with the characters one by one
  for(i=0;i<str.length;i++)
  {
  //charAt(i) returns the position of character at specific index(i)
  //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
  if(valid.indexOf(str.charAt(i))==-1)
  {
  alert("description Cannot Contain Numerical Values");
  document.form1.description.value="";
  document.form1.description.focus();
  return false;
  }}

  </script>

  </body>
  </html>