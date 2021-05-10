<?php
include "conn.php";

if(isset($_POST['signup'])){

$id=trim($_POST['id']);
$fname = trim($_POST['fname']);
$lname = trim($_POST['lname']);
$location = trim($_POST['location']);
$email = trim($_POST['email']);
$usname = trim($_POST['usname']);
$pass = trim($_POST['pass']);
//$cpass = trim($_POST['cpass']);

//validation start



$sql = "INSERT INTO orguser (id,fname,lname,location,email,username,password) VALUES ('$id','$fname','$lname','$location','$email','$usname','$pass')";

$query =mysqli_query($conn, $sql);
if ($query) {

  echo "<alert>You Have successfully Signed Up !</alert>";
  
} 
else {
  echo "<alert>You Haven't Signed Up yet  !</alert>";
   
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
  <script language="javascript">
</script>

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
          <div class="col-lg-6 align-self-center">
            <h1 class="heading mb-5">Sign Up And Be a Member !</h1>
           <!-- <p><a href="#" class="btn btn-primary">Get started</a></p>-->
          </div>
        </div>
      </div>  
    </div>
    <div class="site-section pb-0">
      <div class="container">
        <div class="col-lg-7 mx-auto text-center mb-5">
            <span class="subheading">Please, Register  </span>
            <h2 class="heading"><strong class="text-primary">Only If You</strong>Have Organization Of Medicine Or Food !</h2>
          </div>
        <div class="row mb-5">
          <div class="col-md-7 pr-md-7 mb-5">
     <form action="signup.php" method="post" name="form1" onSubmit="return validateForm();" >
        <div class="form-row">
      <div class="form-group col-md-6">
      <label for="id">Id</label>
      <input type="text" name="id" class="form-control" id="id"  required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="fname">First_Name</label>
      <input type="text" name="fname"  class="form-control" id="fname" required="required">
    </div>
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="lname">Last_Name</label>
      <input type="text" name="lname" class="form-control" id="lname"  required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="location">Location</label>
      <input type="text" name="location" class="form-control"  id="location" required="required">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="pass">Password</label>
      <input type="password" name="pass"  class="form-control" id="pass" required="required">
    
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
  
  <button type="submit" name="signup" class="btn btn-primary">Sign-up</button>
</form>
 </div>
   </div> <!-- .row -->

      </div>
    </div>

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

  if(document.form1.id.value==""){
alert("Id Field is Empty");
document.form1.id.focus();
return false;
}
var str= document.form1.id.value;
  var valid="0123456789";
  for(i=0;i<str.length;i++)
  {
  if(valid.indexOf(str.charAt(i))==-1)
  {
  alert("ID can only contain Numerals");
  document.form1.id.value="";
  document.form1.id.focus();
  return false;
  }
  }

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