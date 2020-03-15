
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>


<style>
table {
width: 100%;
color: #000000;
font-family: monospace;
font-size: 25px;
text-align: center;
table-layout:auto;
 border: 1px solid black;
 border-collapse: collapse;
}
td, th {
border: 1px solid black;
  padding: 7px;
  text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2}
table, td, th {
  border: 1px solid black;
  table-layout:fixed;
}
table{
width:50%;
text-align:center;

}
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
.y{
padding:inherit;

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

input[type=text] {
  background: linear-gradient(to right, #dd5e89  0%, #f7bb97 100%);
  size:40;
    border: 1.5px solid black;

}
.m{
border-radius: 12px;
background:linear-gradient(to right,#ddd6f3    0%, #faaca8 100%);
}
.p{
color:linear-gradient(to right,#dd5e89  0%, #f7bb97 100%);
}
th{
height:50px;
}
.dropbtn {
  background-color: #73c2fb;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
/* Popup container - can be anything you want */
.popup {
color:#000000;
  position: fixed;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}


@font-face {
  font-family: Clip;
  src: url("https://acupoftee.github.io/fonts/Clip.ttf");
}

body {
 
   
    linear-gradient(335deg, black 23px, transparent 23px),
    linear-gradient(155deg, black 23px, transparent 23px);
  background-size: 12px 12px;
}

.sign {
  position:fixed;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 20%;
  height: 20%;
  transform: translate(-50%, -50%);
  letter-spacing: 2;
  left: 50%;
  top: 90%;
  font-family: "Clip";
  text-transform: uppercase;
  font-size: 2em;
  color: #000000;
  animation: shine 2s forwards, flicker 3s infinite;
}

@keyframes blink {
  0%,
  22%,
  36%,
  75% {
    color: #000000;
  }
  28%,
  33% {
    color: #ff65bd;
    text-shadow: none;
  }
  82%,
  97% {
    color: #ff2483;
    text-shadow: none;
  }
}

.flicker {
  animation: shine 2s forwards, blink 3s 2s infinite;
}

.fast-flicker {
  animation: shine 2s forwards, blink 10s 1s infinite;
}

@keyframes shine {
  0% {
    color: #000000;
    text-shadow: none;
  }
  100% {
    color: #000000;
    text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
      -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
      0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
  }
}

@keyframes flicker {
  from {
    opacity: 1;
  }

  4% {
    opacity: 0.9;
  }

  6% {
    opacity: 0.85;
  }

  8% {
    opacity: 0.95;
  }

  10% {
    opacity: 0.9;
  }

  11% {
    opacity: 0.922;
  }

  12% {
    opacity: 0.9;
  }

  14% {
    opacity: 0.95;
  }

  16% {
    opacity: 0.98;
  }

  17% {
    opacity: 0.9;
  }

  19% {
    opacity: 0.93;
  }

  20% {
    opacity: 0.99;
  }

  24% {
    opacity: 1;
  }

  26% {
    opacity: 0.94;
  }

  28% {
    opacity: 0.98;
  }

  37% {
    opacity: 0.93;
  }

  38% {
    opacity: 0.5;
  }

  39% {
    opacity: 0.96;
  }

  42% {
    opacity: 1;
  }

  44% {
    opacity: 0.97;
  }

  46% {
    opacity: 0.94;
  }

  56% {
    opacity: 0.9;
  }

  58% {
    opacity: 0.9;
  }

  60% {
    opacity: 0.99;
  }

  68% {
    opacity: 1;
  }

  70% {
    opacity: 0.9;
  }

  72% {
    opacity: 0.95;
  }

  93% {
    opacity: 0.93;
  }

  95% {
    opacity: 0.95;
  }

  97% {
    opacity: 0.93;
  }

  to {
    opacity: 1;
  }
}

</style>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Amrita ML/OD/Ordinary Leave Management System</title>
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
<?php

if(isset($_POST['but'])) 
  {
  ?>
  <script> window.location='attcomp.php';
 </script>
<?php
}

?>
<form method="post">
<div class="topnav">
  <a class="active" href="#home"></a>
      <a> <strong> <em>ATTENDANCE STATUS &nbsp;&nbsp;<button name="but" class="y" type="submit" > Complaint </button> </em></strong> </a>

	  </div>
<table align="center">
<caption></caption>
<tr>
<th id="rollno">Roll no  </th>
<th id="astatus">Attendance status</th>
<th id="date">Date</th>
<th id="uodate">Updated date </th>




</tr>
<?php


if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}
$d=$_SESSION['trmsaid'];
$sql = mysqli_query($db,"SELECT `ID`, `Atten_state`, `date`, `timestamp` FROM `atten_state` WHERE `id`=$d");

while($row=mysqli_fetch_array($sql))

{
@$var1= $row['ID'];
@$var2=$row['Atten_state'];

@$var3=$row['date'];

@$var4=$row['timestamp'];






?>
<tr>
<td> <?php echo @$var1;?></td>

<td> <?php echo @$var2;?></td>

<td><?php echo @$var3;?>  			<!--<input align="right" type="submit" name="si" value="Work on it">-->
</td>

<td> <?php echo @$var4;?></td>



</tr>
<?php
}

?>

</table>
</form>
<em><div class="popup" onclick="myFunction()"> <div class="sign"><span class="fast-flicker">CLI</span>CK<span class="flicker">HE</span>RE</div><em>
  <span class="popuptext" id="myPopup">SOFTWARE ENGINEERING : </br> 85% </br>"Bunk class : 2 more"</br> "Marks provided : 3"</span>
</div>
</span>

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>

</body>
</html>
