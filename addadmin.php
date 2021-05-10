<?php
session_start();

if( !isset($_SESSION['username']) && !isset($_SESSION['password'])){
  
   header('location:login.php');
 exit();
}
include "conn.php";

if(isset($_POST['add'])){

$fname = trim($_POST['fname']);
$lname = trim($_POST['lname']);
$email = trim($_POST['email']);
$usname = trim($_POST['usname']);
$pass = trim($_POST['pass']);
$cpass = trim($_POST['cpass']);
//validation start


if($pass==$cpass){

$sql = "INSERT INTO admin (firstname,lastname,email,username,password) VALUES ('$fname','$lname','$email','$usname','$pass')";

$query =mysqli_query($conn, $sql);
if ($query) {

  echo "<alert> new Employee Added ";
 
} 
else {
  echo "<alert>Nothing added to the data-base !"; 
header("location: addadmin.php");

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
              <!-- <li><button type="button" class="btn btn-primary">
                    Notifications <span class="badge badge-light">4</span>
                  </button></li>-->

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

   

    <div class="slide-item overlay" style="background-image: url('images/photo-1606940743881-b33f4b04d661.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <h1 class="heading mb-5">Welcome <?php $_SESSION['username'] ?> </h1>
           <!-- <p><a href="#" class="btn btn-primary">Get started</a></p>-->
          </div>
        </div>
      </div>  
    </div>
    <div class="site-section pb-0">
      <div class="container">
        <div class="col-lg-7 mx-auto text-center mb-5">
            <span class="subheading">Please, Register Additional </span>
            <h2 class="heading"><strong class="text-primary"> Admin </strong>For System</h2>
          </div>
        <div class="row mb-5">
          <div class="col-md-7 pr-md-7 mb-5">
     <form action="addadmin.php" method="post" name ="form1" onSubmit="return validateForm();">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">First_Name</label>
      <input type="text" name="fname" class="form-control" id="fname" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last_Name</label>
      <input type="text" name="lname" class="form-control"  id="lname" required="required">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="pass">Password</label>
      <input type="password" name="pass" class="form-control" id="pass" required="required">
    
  </div>
    <div class="form-group col-md-6">
      <label for="cpass">Confirm_Password</label>
      <input type="password" name="cpass" class="form-control" id="cpass" required="required">
    </div>
  </div>
  <div class="form-row">
     <div class="form-group col-md-6">
      <label for="usname">User_Name</label>
      <input type="text" name="usname" class="form-control" id="usname" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email" required="required">
    </div>
  </div>
  
  <button type="submit" name="add" class="btn btn-primary">Add_Admin</button>
</form>
 </div>
   </div> <!-- .row -->

      </div>
    </div>
<center>
    <?php
include "conn.php";

$query="select * from orguser";
$query =mysqli_query($conn, $query);

 if(mysqli_num_rows($query) > 0){
  echo"<table class='table table-hover'>";
 /* echo"<thead>
                   <tr>
                      <th>ID</th> 
                      <th>First-name</th>
                      <th>Last-name</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Password</th>
                    
                      
                    </tr>    
              </thead>  ";*/
while($row = mysqli_fetch_array($query)) {

echo "


          <div class='col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4'>
               <tr>
                <td> <h5 >".$row['id']."</h5><td>
                <td><p>".$row['firstname']."</p></td>
                <td><p>".$row['lastname']."</p></td>
                <td><p>".$row['email']."</p></td>
                <td><p>".$row['username']."</p></td>
               <td> <p>".$row['password']."</p></td>
               </tr>
              
            </div>
          </div>
        ";
}
echo "</table>";
}
 ?>
</center>
    <footer class="footer-section">
      <div class="container">
       <!-- <div class="row">-->
       
          <!--<div class="col-lg-3">
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

            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" id="footer-subscribe" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control  bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-white text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
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
   <script type="text/javascript">
function validateForm()
{


//for alphabet characters only
var str=document.form1.fname.value;
  var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  //comparing user input with the characters one by one
  for(i=0;i<str.length;i++)
  {
  //charAt(i) returns the position of character at specific index(i)
  //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
  if(valid.indexOf(str.charAt(i))==-1)
  {
  alert("First Name Cannot Contain Numerical Values");
  document.form1.fname.value="";
  document.form1.fname.focus();
  return false;
  }}
  
if(document.form1.fname.value=="")
{
alert("First Name Field is Empty");
return false;
}

//for alphabet characters only
var str=document.form1.lname.value;
  var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  //comparing user input with the characters one by one
  for(i=0;i<str.length;i++)
  {
  //charAt(i) returns the position of character at specific index(i)
  //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
  if(valid.indexOf(str.charAt(i))==-1)
  {
  alert("Last Name Cannot Contain Numerical Values");
  document.form1.lname.value="";
  document.form1.lname.focus();
  return false;
  }}
  
  //for alphabet characters only
var str=document.form1.location.value;
  var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  //comparing user input with the characters one by one
  for(i=0;i<str.length;i++)
  {
  //charAt(i) returns the position of character at specific index(i)
  //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
  if(valid.indexOf(str.charAt(i))==-1)
  {
  alert("Location Cannot Contain Numerical Values");
  document.form1.location.value="";
  document.form1.location.focus();
  return false;
  }}

if(document.form1.lname.value=="")
{
alert("First Name Field is Empty");
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


if(document.form1.usname.value=="")
{
alert("Username Field is Empty");
document.form1.usname.focus();
return false;
}
  
if(document.form1.pass.value=="")
{
alert("Password Field is Empty ");
document.form1.pass.focus();
return false;
}
  
if(document.form1.pass.length<6)
{
alert("Password must be atleast 6 characters long");
document.form1.pass.focus();
return false;
}
if(document.form1.cpass.value=="")
{
alert("Retype Password ");
document.form1.cpass.focus();
return false;
}

if((document.form1.pass.value)!=(document.form1.cpass.value))
{
alert("Password Does Not match ");
document.form1.cpass.value="";
document.form1.cpass.focus();
return false;
}}
  </script>


  </body>
  </html>