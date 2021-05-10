<?php
session_start();
include "conn.php";
if( !isset($_SESSION['username']) && !isset($_SESSION['password'])){
  
   header('location:login.php');
 exit();
}



if(isset($_POST['send'])){

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$location = trim($_POST['location']);
$message = trim($_POST['message']);

$sql = "INSERT INTO message (name,email,location,message) VALUES ('$name','$email','$location','$message')";

$query =mysqli_query($conn, $sql);
if ($query) {

  echo "<alert>Your message Sent Successfully !</alert>";
} else {
  echo "<alert>Your message right now sorry !!!</alert>"; 
header("message.php");
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

    
    <header class="site-navbar light js-sticky-header site-navbar-target bg-dark" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="orguser.php" class="mb-0">Product Expiry User Page<span class="text-primary">.</span> </a></div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="orguser.php" class="nav-link active">Home</a></li>

                
              <!-- <li><button type="button" class="btn btn-primary">
                    Notifications <span class="badge badge-light">4</span>
                  </button></li>-->

            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Options</a>
          <div class="dropdown-menu">
               <a class="dropdown-item" class="nav-link" href="Showproduct.php">Show Registered Product</a>
               <a class="dropdown-item" class="nav-link" href="message.php">Message</a>
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



    <div class="slide-item overlay" style="background-image: url('images/redesignarticle_codev.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center text-center mx-auto">
            <h1 class="heading mb-5">Message Us Mr/Mrs <?php echo $_SESSION['username'] ?> </h1>
            <!--<p><a href="#" class="btn btn-primary">Get started</a></p>-->
          </div>
        </div>
      </div>  
    </div>


    <div class="site-section pb-0">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 pr-md-7 mb-5">
            <form class="form-horizontal" role="form" name="form1" enctype="multipart/form-data" onSubmit="return validateForm();" action="message.php" method="post">
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
              <div class="form-group col-md-6">
                <label for="location">Location</label>
                <input type="text" name="location" class="form-control" id="location" required="required">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" required="required" ></textarea>
              </div>
              <div class="form-group">
                <button type="submit" name="send" class="btn btn-primary py-3 px-5" value="Send Message">Send Message</button>
              </div>
            </form>
          </div>
           
<?php      
$query="select * from message";
$query =mysqli_query($conn, $query);

 if(mysqli_num_rows($query) > 0){
  echo"<table class='table table-hover'>";
 /* echo"<thead>
                   <tr>
                      <th>ID</th> 
                      <th>Message</th>
                      <th>Reply</th>
                      
                    </tr>    
              </thead>  ";*/
while($row = mysqli_fetch_array($query)) {

echo "
        <div class='col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4'>
               <tr>
                <td><p>".$row['id']."</p></td>
               <td><p>".$row['message']."</p></td>
               <td> <p>".$row['reply']."</p></td>
    
  </tr>
            </div>
          </div>
        ";
}
echo "</table>";
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

//for alphabet characters only
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


}
  </script>

  </body>
  </html>