<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
session_start();
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `ml` WHERE CONCAT(`id`, `firstname`, `lastname`, `rollno`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
	$_SESSION['varname'] = $search_result;
	?>
	<script> window.location='search2.php';</script>
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
.dropbtn {
  background-color: #73c2fb;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
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

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #000;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #7ef9ff;}
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
<style>
.swe{
  /*background-image: url("data:image/jpeg;base64,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");*/
    background-repeat: no-repeat;
	  background-size: 2270px 1000px;


}
</style>



</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left">
						<a href="tel:+9530123654896">
							<span class="lnr lnr-phone"></span>
							<span class="text">
								<span class="text">+919345344556</span>
							</span>
						</a>
						<a href="mailto:support@colorlib.com">
							<span class="lnr lnr-envelope"></span>
							<span class="text">
								<span class="text">swethu1999@hotmail.com</span>
							</span>
						</a>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="adminprofile.php">My Profile</a>
    <a href="change-password.php">Change</a>
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
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="courses.html">Courses</a></li>
									<li class="nav-item"><a class="nav-link" href="course-details.html">Course Details</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
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
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="banner_content">
							<h2>
								Amrita Vishwa Vidyapeetham <br>
								ML/OD/Ordinary Leave Management System
							</h2>
							<p>
								Lets use technology to make things easier
							</p>
							<div class="search_course_wrap">
								<form action="" method="post" class="form_box d-flex justify-content-between w-100">
									<input type="text" placeholder="Search Courses" class="form-control" name="valueToSearch" onFocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Search Courses'">
									<button type="submit" class="btn search_course_btn" name="search">Search</button>
									
									<br>
									<br>
									<br>
									</form>
								

      <!-- populate table from mysql database -->
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  	 <table>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>rollno</th>
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['rollno'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
								
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
							<div class="search_course_wrap">
								<form action="" class="form_box d-flex justify-content-between w-100">
																			  <a href="medical_leave.php" class="btn search_course_btn" NAME="med">Apply</a>

									
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
									<h4>Languages</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon2.png" alt="">
									</div>
									<h4>Business</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon3.png" alt="">
									</div>
									<h4>Literature</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon4.png" alt="">
									</div>
									<h4>Software</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon5.png" alt="">
									</div>
									<h4>Design</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon6.png" alt="">
									</div>
									<h4>Coaching</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="offset-lg-4 col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon7.png" alt="">
									</div>
									<h4>Development</h4>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="dpmt_right">
						<h1>Over 2500 Courses from 5 Platform</h1>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It�s
							exciting to think about setting up your own viewing station. In the life of any aspiring astronomer that it is
							time to buy that first telescope. It�s exciting to think about setting up your own viewing station.</p>
						<p>It�s exciting to think about setting up your own viewing station. In the life of any aspiring astronomer that
							it is time to buy that first telescope exciting is time to buy that first.</p>
						<a href="#" class="primary-btn text-uppercase">Explore Courses</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Department Area =================-->

	<!--================ Start Popular Courses Area =================-->
	<div class="popular_courses lite_bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
						<h2>Popular Courses</h2>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It�s
							exciting to think about setting up your own viewing station.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
						<div class="course_head overlay">
							<img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
							<div class="authr_meta">
								<img src="img/author1.png" alt="">
								<span>Mart Taylor</span>
							</div>
						</div>
						<div class="course_content">
							<h4>
								<a href="course-details.html">Learn React js beginners</a>
							</h4>
							<p>When television was young, there was a huge popular show based on the still popular fictional character of
								Superman.</p>
							<div class="course_meta d-flex justify-content-between">
								<div>
									<span class="meta_info">
										<a href="#"><i class="lnr lnr-user"></i>355</a>
									</span>
									<span class="meta_info">
										<a href="#">
											<i class="lnr lnr-bubble"></i>35
										</a>
									</span>
								</div>
								<div>
									<span class="price">$150</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
						<div class="course_head overlay">
							<img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
							<div class="authr_meta">
								<img src="img/author1.png" alt="">
								<span>Mart Taylor</span>
							</div>
						</div>
						<div class="course_content">
							<h4>
								<a href="course-details.html">Learn React js beginners</a>
							</h4>
							<p>When television was young, there was a huge popular show based on the still popular fictional character of
								Superman.</p>
							<div class="course_meta d-flex justify-content-between">
								<div>
									<span class="meta_info">
										<a href="#">
											<i class="lnr lnr-user"></i>355
										</a>
									</span>
									<span class="meta_info"><a href="#">
											<i class="lnr lnr-bubble"></i>35
										</a></span>
								</div>
								<div>
									<span class="price df_color1">$150</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
						<div class="course_head overlay">
							<img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
							<div class="authr_meta">
								<img src="img/author1.png" alt="">
								<span>Mart Taylor</span>
							</div>
						</div>
						<div class="course_content">
							<h4>
								<a href="course-details.html">Learn React js beginners</a>
							</h4>
							<p>When television was young, there was a huge popular show based on the still popular fictional character of
								Superman.</p>
							<div class="course_meta d-flex justify-content-between">
								<div>
									<span class="meta_info">
										<a href="#">
											<i class="lnr lnr-user"></i>355
										</a>
									</span>
									<span class="meta_info"><a href="#">
											<i class="lnr lnr-bubble"></i>35
										</a></span>
								</div>
								<div>
									<span class="price">$150</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
						<div class="course_head overlay">
							<img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
							<div class="authr_meta">
								<img src="img/author1.png" alt="">
								<span>Mart Taylor</span>
							</div>
						</div>
						<div class="course_content">
							<h4>
								<a href="course-details.html">Learn React js beginners</a>
							</h4>
							<p>When television was young, there was a huge popular show based on the still popular fictional character of
								Superman.</p>
							<div class="course_meta d-flex justify-content-between">
								<div>
									<span class="meta_info">
										<a href="#">
											<i class="lnr lnr-user"></i>355
										</a>
									</span>
									<span class="meta_info"><a href="#">
											<i class="lnr lnr-bubble"></i>35
										</a></span>
								</div>
								<div>
									<span class="price df_color2">$150</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Popular Courses Area =================-->

	<!--================ Start Fact Area =================-->
	<div class="swe">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
						<h2>Facts that Make us Unique</h2>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It�s
							exciting to think about setting up your own viewing station.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single features -->
				<div class="col-lg-4 col-md-6">
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
				<div class="col-lg-4 col-md-6">
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
				<div class="col-lg-4 col-md-6">
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
				<div class="col-lg-4 col-md-6">
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
				<div class="col-lg-4 col-md-6">
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
				<div class="col-lg-4 col-md-6">
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
	<div class="section_gap testimonial_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 text-center">
					<div class="active_testimonial owl-carousel" data-slider-id="1">
						<!-- single testimonial -->
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
	<div class="section_gap registration_area">
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
	<div class="events_area">
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
	</div>
	<!--================ End Events Area =================-->


	<!--================ Start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Top Products</h4>
					<ul>
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
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
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright � 2018 All rights reserved | This template is
					made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a></p>
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