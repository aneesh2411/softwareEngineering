<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');

session_start();

/*$username = $_SESSION['uname'];
$password = $_SESSION['pwd'];
$sql_query = "select ID,UserName from tbladmin where UserName like '$username' and Password like '$password';";
$result = mysqli_query($db, $sql_query);

if(mysqli_num_rows($result) > 0 ){

$row = mysqli_fetch_assoc($result);
$name = $row["UserName"]; 
$user_id =  $row['ID'];
echo $user_id;
echo "Welcome: Buyer";
echo "heyyyyyyyyyyyyyyy";*/


if(isset($_POST['search']))
{

    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `ml` WHERE CONCAT(`id`, `firstname`, `lastname`, `rollno`, `startdate`, `enddate`, `reason`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
	$_SESSION['varname'] = $search_result;
	?>
	<!--<script> window.location='search2.php';</script>-->
	<?php

    
}
else if(isset($_POST['srch']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `ordinary` WHERE CONCAT(`id`, `firstname`, `lastname`, `rollno`, `startdate`, `enddate`, `reason`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
	$_SESSION['varname'] = $search_result;
	?>
	<!--<script> window.location='search2.php';</script>-->
	<?php

    
}
else if(isset($_POST['sear']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `od` WHERE CONCAT(`id`, `fname`, `lname`, `rollno`, `sdate`, `edate`, `reason`) LIKE '%".$valueToSearch."%'";
    $sr = ftTable($query);
	$_SESSION['varname'] = $sr;
	?>
	<!--<script> window.location='search2.php';</script>-->
	<?php

    
}
 else {
    //$query = "SELECT * FROM `ml`";
    //$search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "trms");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
function ftTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "trms");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

if(isset($_POST['med']))
{

?>

<script>
alert('WELCOME');
window.location='medical_leave.php';
</script>

<?php
}

if(isset($_POST['od']))
{

?>

<script>
alert('WELCOME');
window.location='medical_leave.php';
</script>

<?php
}
if(isset($_POST['ord']))
{

?>

<script>
alert('WELCOME');
window.location='medical_leave.php';
</script>

<?php
}

?>







<!doctype html>
<html lang="en">

<head>
<style>
::placeholder { 
  color: black;
  font-size:20px;
}
a{
  color: hotpink;

}
.dropbtn {
  background-color: #73c2fb;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
table, td, th {
  border: 1px solid black;
}
table{
width:100%;
text-align:center;

}
th{
height:50px;
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
.notification {
  background-color: white;
  color: black;
  text-decoration: none;
  padding: 30px 27px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
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

	<!--================ Start Header Menu Area =================-->
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
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn" name="search"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>

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
							<li class="nav-item"><a href="qwerty.php" class="notification"><span>INBOX</span><span class="badge"></span></a></li>
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
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
	<div class="i">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="">
						<div class="banner_content">
							<h2 style="color:black;">
								Amrita Vishwa Vidyapeetham 
								ML/OD/Ordinary </br>
								Leave Management System
							</h2>
							<!--<div class="">
							</br>
														</br>

							</br>

							</br>
								<form action="" method="post" class="">
									<input type="text" size="50" placeholder="Search medical leaves" class="" name="valueToSearch" onFocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Search Courses'">
									<button type="submit" class="btn search_course_btn" name="search">Search</button>
								
									</form>
									</br>
									</br>
									</br>
									</br>
								<form action="" method="post" class="">
									<input type="text" size="50" placeholder="Search ordinary leaves" class="" name="valueToSearch" onFocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Search Courses'">
									<button type="submit" class="btn search_course_btn" name="srch" href="#search">Search</button>
								
									</form>
									</br>
									</br>
									</br>
									</br>
								<form action="" method="post" class="">
									<input type="text" size="50" width="40" placeholder="Search On-Duty leaves" class="" name="valueToSearch" onFocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Search Courses'">
									<button type="submit" class="btn search_course_btn" name="sear" href="#search">Search</button>
								
									</form>-->
								

      <!-- populate table from mysql database -->
	  <br>
	  <br>
	  <br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->
	<section class="feature_area">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-lg-4">
					<div class="single_feature d-flex flex-row pb-30">
						<div class="icon">
							<span class="lnr lnr-book"></span>
						</div>
						<div class="desc">
							<h4>Apply Medical Leave</h4>
							<p>
								Please do not forget to attach the medical certificate
							</p>
							<div class="">
								<form action="" class="form_box d-flex justify-content-between w-100">
																			  <a href="medical_leave.php" class="t" NAME="med">Apply</a>

									
								</form>
							</div>
						</div>
					</div>
					<div class="single_feature d-flex flex-row pb-30">
						<div class="icon">
							<span class="fa fa-trophy"></span>
						</div>
						<div class="desc">
							<h4>On Duty Leave</h4>
							<p>
								Please do not forget to attach the signed copy of advisor
							</p>
							<div class="search_course_wrap">
								<form action="" class="form_box d-flex justify-content-between w-100">
										  <a href="od.php" class="btn search_course_btn" NAME="od">Apply</a>

								<!--<button type="submit" class="btn search_course_btn " name="od">APPLY</button>-->
									
								</form>
							</div>
						</div>
					</div>
					<div class="single_feature d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-screen"></span>
						</div>
						<div class="desc">
							<h4>Ordinary Leave</h4>
							<p>
								Provide proper reason and parent signature
							</p>
							<div class="search_course_wrap">
								<form action="" class="form_box d-flex justify-content-between w-100">
																			  <a href="ord.php" class="btn search_course_btn" NAME="ord">Apply</a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Feature Area =================-->

	<!--================ Start Department Area =================-->
	<div class="popular_courses lite_bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
						<h2>Searching Details</h2>
						<p>Type your required detail in the search bar and it will appear here</p>
					</div>
				</div>
			</div>
			<div class="row" id="search">
				<!-- single course -->
				<form action="" method="post" class="">
									<input type="text" size="45" placeholder="Search medical leaves" class="" name="valueToSearch" onFocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Search Courses'">
									 </br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="m" name="search">Search</button>
								
									</form>
									
							&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form action="" method="post" class="">
									<input type="text" size="45" placeholder="Search ordinary leaves" class="" name="valueToSearch" onFocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Search Courses'">
									  </br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<button type="submit" class="m" name="srch" href="#search">Search</button>
								
									</form>
									
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form action="" method="post" class="">
									<input type="text" size="45" width="40" placeholder="Search On-Duty leaves" class="" name="valueToSearch" onFocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Search Courses'">
									  </br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<button type="submit" class="m" name="sear" href="#search">Search</button>
								
									</form>
								</br>
								</br>
								</br></br>
								
								
			
             <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Rollno</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Reason</th>

                </tr>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['rollno'];?></td>
					<td><?php echo $row['startdate'];?></td>
					<td><?php echo $row['enddate'];?></td>
					<td><?php echo $row['reason'];?></td>


                </tr>
                <?php endwhile;?>
				  <?php while($row = mysqli_fetch_array($sr)):?>
                <tr>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['lname'];?></td>
                    <td><?php echo $row['rollno'];?></td>
					<td><?php echo $row['sdate'];?></td>
					<td><?php echo $row['edate'];?></td>
					<td><?php echo $row['reason'];?></td>


                </tr>
                <?php endwhile;?>
            </table>

							</div>
						</div>
					</div>
				
	<!--================ End Department Area =================-->

	<!--================ Start Popular Courses Area =================-->
	<div class="department_area section_gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="dpmt_courses">
						<div class="row">
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon1.png" alt="">
									</div>
									<h4>CSE</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon2.png" alt="">
									</div>
									<h4>ECE</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon3.png" alt="">
									</div>
									<h4>EEE</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon4.png" alt="">
									</div>
									<h4>MECH</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon5.png" alt="">
									</div>
									<h4>MASSCOM</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon6.png" alt="">
									</div>
									<h4>ENG</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="offset-lg-4 col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon7.png" alt="">
									</div>
									<h4>FOOD SCIENCE</h4>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="dpmt_right">
						<h1>Various Courses provided</h1>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It's
							exciting to think about setting up your own viewing station. In the life of any aspiring astronomer that it is
							time to buy that first telescope. It's exciting to think about setting up your own viewing station.</p>
						<p>It's exciting to think about setting up your own viewing station. In the life of any aspiring astronomer that
							it is time to buy that first telescope exciting is time to buy that first.</p>
						<a href="#" class="primary-btn text-uppercase">Explore Courses</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Popular Courses Area =================-->

	<!--================ Start Fact Area =================-->
	<!--<div class="swe">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
					</br>
						</br>
						<h2>Facts that Make us Unique</h2>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It�s
							exciting to think about setting up your own viewing station.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single features -->
			<!--	<div class="col-lg-4 col-md-6">
					<div class="single_fact">
						<div class="f_icon">
							<img src="img/f-icons/icon1.png" alt="">
						</div>
						<h4>Expert Mentors</h4>
						<p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
							amet consec tetur adipisicing elit, sed do eiusmod tempor sed do eiusmod tempor incididunt labore dolor sit amet
							consec tetur adipisicing elit, seddo eiusmod tempor.</p>
					</div>
				</div>
				<!-- single features -->
			<!--	<div class="col-lg-4 col-md-6">
					<div class="single_fact">
						<div class="f_icon">
							<img src="img/f-icons/icon2.png" alt="">
						</div>
						<h4>25000+ Courses</h4>
						<p>Lorem ipsum dolor sit amet consec tetur adipis icing elit, sed do eiusmod tempor incididunt labore dolor sit
							amet consec.</p>
					</div>
				</div>
				<!-- single features -->
				<!--<div class="col-lg-4 col-md-6">
					<div class="single_fact">
						<div class="f_icon">
							<img src="img/f-icons/icon3.png" alt="">
						</div>
						<h4>Student Membership</h4>
						<p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
							amet consec tetur adipisicing elit, sed do eiusmod tempor sed do eiusmod tempor incididunt labore dolor sit amet
							consec tetur adipisicing elit, seddo eiusmod tempor.</p>
					</div>
				</div>
				<!-- single features -->
				<!--<div class="col-lg-4 col-md-6">
					<div class="single_fact">
						<div class="f_icon">
							<img src="img/f-icons/icon4.png" alt="">
						</div>
						<h4>Lifetime Access</h4>
						<p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
							amet consec tetur adipisicing elit sed do eiusmod.</p>
					</div>
				</div>
				<!-- single features -->
			<!--	<div class="col-lg-4 col-md-6">
					<div class="single_fact">
						<div class="f_icon">
							<img src="img/f-icons/icon5.png" alt="">
						</div>
						<h4>Source File Included</h4>
						<p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
							amet consec tetur adipisicing elit sed do eiusmod.</p>
					</div>
				</div>
				<!-- single features -->
			<!--	<div class="col-lg-4 col-md-6">
					<div class="single_fact">
						<div class="f_icon">
							<img src="img/f-icons/icon6.png" alt="">
						</div>
						<h4>Live Support</h4>
						<p>Lorem ipsum dolor sit amet consec tetur adipis icing elit, sed do eiusmod tempor incididunt labore dolor sit
							amet consec.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Fact Area =================-->

	<!--================ Start Testimonial Area =================-->
	<!--<div class="section_gap testimonial_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 text-center">
					<div class="active_testimonial owl-carousel" data-slider-id="1">
						<!-- single testimonial -->
						<!--<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4>Fanny Spencer</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
									it, you travel across her faceand She is the host to your journey.</p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4>Fanny Spencer</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
									it, you travel across her faceand She is the host to your journey.</p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4>Fanny Spencer</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
									it, you travel across her faceand She is the host to your journey.</p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4>Fanny Spencer</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
									it, you travel across her faceand She is the host to your journey.</p>
							</div>
						</div>
					</div>

					<div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
						<div class="owl-thumb-item">
							<div class="position-relative">
								<img class="img-fluid" src="img/testimonial/t1.jpg" alt="">
							</div>
							<div class="overlay-grad"></div>
						</div>
						<div class="owl-thumb-item">
							<div class="position-relative">
								<img class="img-fluid" src="img/testimonial/t2.jpg" alt="">
							</div>
							<div class="overlay-grad"></div>
						</div>
						<div class="owl-thumb-item">
							<div class="position-relative">
								<img class="img-fluid" src="img/testimonial/t3.jpg" alt="">
							</div>
							<div class="overlay-grad"></div>
						</div>
						<div class="owl-thumb-item">
							<div class="position-relative">
								<img class="img-fluid" src="img/testimonial/t4.jpg" alt="">
							</div>
							<div class="overlay-grad"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Testimonial Area =================-->

	<!--================ Start Registration Area =================-->
	<!--<div class="section_gap registration_area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1>Register Now</h1>
							<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It�s
								exciting to think about setting up your own viewing station.</p>
						</div>
						<div class="col clockinner1 clockinner">
							<h1 class="days">150</h1>
							<span class="smalltext">Days</span>
						</div>
						<div class="col clockinner clockinner1">
							<h1 class="hours">23</h1>
							<span class="smalltext">Hours</span>

						</div>
						<div class="col clockinner clockinner1">
							<h1 class="minutes">47</h1>
							<span class="smalltext">Mins</span>
						</div>
						<div class="col clockinner clockinner1">
							<h1 class="seconds">59</h1>
							<span class="smalltext">Secs</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-1">
					<div class="register_form">
						<h3>Courses for Free</h3>
						<p>It is high time for learning</p>
						<form class="form_area" id="myForm" action="mail.html" method="post">
							<div class="row">
								<div class="col-lg-12 form_group">
									<input name="name" placeholder="Your Name" required="" type="text">
									<input name="name" placeholder="Your Phone Number" required="" type="tel">
									<input name="email" placeholder="Your Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
									 required="" type="email">
								</div>
								<div class="col-lg-12 text-center">
									<button class="primary-btn">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Registration Area =================-->

	<!--================ Start Events Area =================-->
	<!--<div class="events_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
						<h2>Upcoming Events</h2>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It�s
							exciting to think about setting up your own viewing station.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<div class="single_event">
								<div class="row align-items-center">
									<div class="col-lg-6 col-md-5">
										<div class="event_thumb">
											<img src="img/event1.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-6 col-md-7">
										<div class="event_details">
											<p>25th February, 2017</p>
											<h4>
												<a href="#">The Universe Through A Child S Eyes</a>
											</h4>
											<p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor
												sit amet consec tetur adipisicing elit sed.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<div class="single_event">
								<div class="row align-items-center">
									<div class="col-lg-6 col-md-5">
										<div class="event_thumb">
											<img src="img/event2.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-5 col-md-7">
										<div class="event_details">
											<p>25th February, 2017</p>
											<h4>
												<a href="#">The Universe Through A Child S Eyes</a>
											</h4>
											<p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor
												sit amet consec tetur adipisicing elit sed.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!--================ End Events Area =================-->


	<!--================ Start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<!--<h4>Top Products</h4>
					<ul>
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>DEVELOPERS</h4>
					<ul>
						<li><a href="#">Swethu</a></li>
						<li><a href="#">Aneeeees</a></li>
						
					</ul>
				</div>-->
				 <div class="d">
					<p >  <font face = "Comic sans MS" size =" 3">DEVELOPED WITH LOVE <i class="fa fa-heart-o" aria-hidden="true"></i>, </font><br /></p>
					<p> <font face = "Comic sans MS" size =" 3">BY,  </font> </p>
					<p> <font face = "Comic sans MS" size =" 3">SWETHU AND ANEES. </font><br /> </p>
					</div>
			<!--	<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Features</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">Guides</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Experts</a></li>
						<li><a href="#">Agencies</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Newsletter</h4>
					<p>You can trust us. we only send promo offers,</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
						 method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Your Email Address" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Your Email Address'"
							 required="" type="email">
							<button class="click-btn btn btn-default">
								<span>subscribe</span>
							</button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>-->
					
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between">
			<!--	<p class="col-lg-8 col-sm-12 footer-text m-0 text-white"><center>Copyright � 2018 All rights reserved | This template is
					made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a> </center></p>-->
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/countdown.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>