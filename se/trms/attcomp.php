<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');

if(isset($_POST['sub'])){

$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['iii'];
$d=$_POST['country'];
$e=$_POST['subject'];


mysqli_query($db,"INSERT INTO `complaint`(`ID`, `fname`, `rollno`, `subj`, `sec`, `comm`) VALUES (NULL,'$a','$b','$c','$d','$e')");

echo "<script>alert('Attendance taken'); </script>";
?>

<script> window.location='ind.php';  </script>

<?php
}



?>
<!DOCTYPE html>
<html lang="en>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button{
background: linear-gradient(to right, #dd5e89  0%, #f7bb97 100%);
}
.dropdown {
  position: absolute;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #000;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.d{
color:rgb(255, 99, 71,0.5);
text-align:center;

position:absolute;

}
.i{

background-image:url(img/banner/home-banner.jpg);
width:100%;

}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #000;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #7ef9ff;}


.m{
border-radius: 12px;
background:linear-gradient(to right,#ddd6f3    0%, #faaca8 100%);
}
.p{
color:linear-gradient(to right,#dd5e89  0%, #f7bb97 100%);
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.cont {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 60px;
}
</style>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Complaint</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left">
						<a href="tel:+919345344556">
							<span class="lnr lnr-phone"></span>
							<span class="text">
								<span class="text">+919345344556</span>
							</span>
						</a>
						<a href="mailto:univhq@amrita.edu">
							<span class="lnr lnr-envelope"></span>
							<span class="text">
								<span class="text">univhq@amrita.edu</span>
							</span>
						</a>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="myprofile.php">My Profile</a>
    <a href="change-password.php">Password</a>
		    <a href="logout.php">Logout</a>


  </div>
</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="main_menu">
			

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a> -->
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="ind.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Analyse </a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="analyse.html">Leave taken</a></li>
									<li class="nav-item"><a class="nav-link" href="stuatten.php">Attendance</a></li>
									<li class="nav-item"><a class="nav-link" href="classrem.php">Classes for me</a></li>
									<li class="nav-item"><a class="nav-link" href="history.php">Leaves applied</a></li>

								</ul>
							</li>
							
							<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<em class="lnr lnr-magnifier"></em>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	
<center><h3>Complaint Form</h3></center>
<center><i>Please inform if there is any wrong updation of attendance</i></center>

<div class="cont">
  <form method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Rollno</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Roll no..">
	
    <label for="sub">Subject</label>
    <input type="text" id="lname" name="iii" placeholder="Subject for updation..">

    <label for="country">Section</label>
    <select id="country" name="country">
      <option value="australia">A</option>
      <option value="canada">B</option>
      <option value="usa">C</option>

      <option value="usa">D</option>

      <option value="usa">E</option>

      <option value="usa">F</option>
    </select>

    <label for="subject">Please mention the complaint clearly</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <center><input name="sub" type="submit" value="Submit"></center>
  </form>
</div>

</body>
</html>
