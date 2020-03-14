<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CLASS REMINDER</title>
<style>
body{ 
	font: normal 13px/20px Arial, Helvetica, sans-serif; word-wrap:break-word;
	color: #eee;
	background:#CCCCCC;
}
#countdown{
	width: 465px;
	height: 175px;
	text-align: center;
	background: #222;
	background-image: -webkit-linear-gradient(top, #222, #333, #333, #222); 
	background-image:    -moz-linear-gradient(top, #222, #333, #333, #222);
	background-image:     -ms-linear-gradient(top, #222, #333, #333, #222);
	background-image:      -o-linear-gradient(top, #222, #333, #333, #222);
	border: 1px solid #111;
	border-radius: 5px;
	box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.6);
	margin: auto;
	padding: 24px 0;
	position:relative;
  top: 0; bottom: 0; left: 0; right: 0;
}

#countdown:before{
	content:"";
	width: 8px;
	height: 65px;
	background: #444;
	background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
	background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
	background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
	background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
	border: 1px solid #111;
	border-top-left-radius: 6px;
	border-bottom-left-radius: 6px;
	display: block;
	position: absolute;
	top: 48px; left: -10px;
}

#countdown:after{
	content:"";
	width: 8px;
	height: 65px;
	background: #444;
	background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
	background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
	background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
	background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
	border: 1px solid #111;
	border-top-right-radius: 6px;
	border-bottom-right-radius: 6px;
	display: block;
	position: absolute;
	top: 48px; right: -10px;
}

#countdown #tiles{
	position: relative;
	z-index: 1;
}

#countdown #tiles > span{
	width: 92px;
	max-width: 92px;
	font: bold 48px 'Droid Sans', Arial, sans-serif;
	text-align: center;
	color: #111;
	background-color: #ddd;
	background-image: -webkit-linear-gradient(top, #bbb, #eee); 
	background-image:    -moz-linear-gradient(top, #bbb, #eee);
	background-image:     -ms-linear-gradient(top, #bbb, #eee);
	background-image:      -o-linear-gradient(top, #bbb, #eee);
	border-top: 1px solid #fff;
	border-radius: 3px;
	box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.7);
	margin: 0 7px;
	padding: 18px 0;
	display: inline-block;
	position: relative;
}
.fs40 { font-size:30px;
color:#FFFFFF }
#countdown #tiles > span:before{
	content:"";
	width: 100%;
	height: 13px;
	background: #111;
	display: block;
	padding: 0 3px;
	position: absolute;
	top: 41%; left: -3px;
	z-index: -1;
}

#countdown #tiles > span:after{
	content:"";
	width: 100%;
	height: 1px;
	background: #eee;
	border-top: 1px solid #333;
	display: block;
	position: absolute;
	top: 48%; left: 0;
}

#countdown .labels{
	width: 100%;
	height: 25px;
	text-align: center;
	position: absolute;
	bottom: 8px;
}

#countdown .labels li{
	width: 102px;
	font: bold 15px 'Droid Sans', Arial, sans-serif;
	color: #f47321;
	text-shadow: 1px 1px 0px #000;
	text-align: center;
	text-transform: uppercase;
	display: inline-block;
}





#countdown1{
	width: 465px;
	height: 175px;
	text-align:center;
	background: #333;
	background-image: -webkit-linear-gradient(top, #222, #333, #333, #222); 
	background-image:    -moz-linear-gradient(top, #222, #333, #333, #222);
	background-image:     -ms-linear-gradient(top, #222, #333, #333, #222);
	background-image:      -o-linear-gradient(top, #222, #333, #333, #222);
	border: 1px solid #111;
	border-radius: 5px;
	box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.6);
	margin:auto;
	padding: 10px 0;
  top: 0; bottom: 0; left: 0; right: 0;
}

#countdown1:before{
	content:"";
	width: 8px;
	height: 65px;
	background: #444;
	background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
	background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
	background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
	background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
	border: 1px solid #111;
	border-top-left-radius: 6px;
	border-bottom-left-radius: 6px;
	display: block;
	position: absolute;
	top: 48px; left: -10px;
}

#countdown1:after{
	content:"";
	width: 8px;
	height: 65px;
	background: #444;
	background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
	background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
	background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
	background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
	border: 1px solid #111;
	border-top-right-radius: 6px;
	border-bottom-right-radius: 6px;
	display: block;
	position: absolute;
	top: 48px; right: -10px;
}

#countdown1 #tiles1{
	position: relative;
	z-index: 1;
}

#countdown1 #tiles1 > span{
	width: 92px;
	max-width: 92px;
	font: bold 48px 'Droid Sans', Arial, sans-serif;
	text-align: center;
	color: #111;
	background-color: #ddd;
	background-image: -webkit-linear-gradient(top, #bbb, #eee); 
	background-image:    -moz-linear-gradient(top, #bbb, #eee);
	background-image:     -ms-linear-gradient(top, #bbb, #eee);
	background-image:      -o-linear-gradient(top, #bbb, #eee);
	border-top: 1px solid #fff;
	border-radius: 3px;
	box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.7);
	margin: 0 7px;
	padding: 18px 0;
	display: inline-block;
	position: relative;
}
.fs40 { font-size:30px;
color:#FFFFFF }
#countdown1 #tiles1 > span:before{
	content:"";
	width: 100%;
	height: 13px;
	background: #111;
	display: block;
	padding: 0 3px;
	position:relative;
	top: 41%; left: -3px;
	z-index: -1;
}

#countdown1 #tiles1 > span:after{
	content:"";
	width: 100%;
	height: 1px;
	background: #eee;
	border-top: 1px solid #333;
	display: block;
	position:relative;
	top: 48%; left: 0;
}

#countdown1 .labels1{
	width: 100%;
	height: 25px;
	text-align: center;
	position:static;
	bottom: 8px;
}

#countdown1 .labels1 li{
	width: 102px;
	font: bold 15px 'Droid Sans', Arial, sans-serif;
	color: #f47321;
	text-shadow: 1px 1px 0px #000;
	text-align: center;
	text-transform: uppercase;
	display: inline-block;
}






#countdown2{
	width: 465px;
	height: 175px;
	text-align:center;
	background: #333;
	background-image: -webkit-linear-gradient(top, #222, #333, #333, #222); 
	background-image:    -moz-linear-gradient(top, #222, #333, #333, #222);
	background-image:     -ms-linear-gradient(top, #222, #333, #333, #222);
	background-image:      -o-linear-gradient(top, #222, #333, #333, #222);
	border: 1px solid #111;
	border-radius: 5px;
	box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.6);
	margin:auto;
	padding: 20px 0;
  top: 0; bottom: 0; left: 0; right: 0;
}

#countdown2:before{
	content:"";
	width: 8px;
	height: 65px;
	background: #444;
	background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
	background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
	background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
	background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
	border: 1px solid #111;
	border-top-left-radius: 6px;
	border-bottom-left-radius: 6px;
	display: block;
	position: absolute;
	top: 48px; left: -10px;
}

#countdown2:after{
	content:"";
	width: 8px;
	height: 65px;
	background: #444;
	background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
	background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
	background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
	background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
	border: 1px solid #111;
	border-top-right-radius: 6px;
	border-bottom-right-radius: 6px;
	display: block;
	position: absolute;
	top: 48px; right: -10px;
}

#countdown2 #tiles2{
	position: relative;
	z-index: 1;
}

#countdown2 #tiles2 > span{
	width: 92px;
	max-width: 92px;
	font: bold 48px 'Droid Sans', Arial, sans-serif;
	text-align: center;
	color: #111;
	background-color: #ddd;
	background-image: -webkit-linear-gradient(top, #bbb, #eee); 
	background-image:    -moz-linear-gradient(top, #bbb, #eee);
	background-image:     -ms-linear-gradient(top, #bbb, #eee);
	background-image:      -o-linear-gradient(top, #bbb, #eee);
	border-top: 1px solid #fff;
	border-radius: 3px;
	box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.7);
	margin: 0 7px;
	padding: 18px 0;
	display: inline-block;
	position: relative;
}
.fs40 { font-size:30px;
color:#FFFFFF }
#countdown2 #tiles2 > span:before{
	content:"";
	width: 100%;
	height: 13px;
	background: #111;
	display: block;
	padding: 0 3px;
	position:relative;
	top: 41%; left: -3px;
	z-index: -1;
}

#countdown2 #tiles2 > span:after{
	content:"";
	width: 100%;
	height: 1px;
	background: #eee;
	border-top: 1px solid #333;
	display: block;
	position:relative;
	top: 48%; left: 0;
}

#countdown2 .labels2{
	width: 100%;
	height: 25px;
	text-align: center;
	position:static;
	bottom: 8px;
}

#countdown2 .labels2 li{
	width: 102px;
	font: bold 15px 'Droid Sans', Arial, sans-serif;
	color: #f47321;
	text-shadow: 1px 1px 0px #000;
	text-align: center;
	text-transform: uppercase;
	display: inline-block;
}
.m{
border-radius: 12px;
background:linear-gradient(to right,#ddd6f3    0%, #faaca8 100%);
}
.p{
color:linear-gradient(to right,#dd5e89  0%, #f7bb97 100%);
}
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
									<li class="nav-item"><a class="nav-link" href="course-details.html">Attendance</a></li>
									<li class="nav-item"><a class="nav-link" href="classrem.php">Classes for me</a></li>
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



<div id="countdown1">
<p> CLASS 1</p>
  <div id='tiles1'></div>
  <div class="labels1">
    <li>Days</li>
    <li>Hours</li>
    <li>Mins</li>
    <li>Secs</li>
  </div>
</div>
</br>

<div id="countdown2">
<p> CLASS 2</p>
  <div id='tiles2'></div>
  <div class="labels2">
    <li>Days</li>
    <li>Hours</li>
    <li>Mins</li>
    <li>Secs</li>
  </div>
</div>
</br>

<div id="countdown">
<p> CLASS 3</p>
  <div id='tiles'></div>
  <div class="labels">
    <li>Days</li>
    <li>Hours</li>
    <li>Mins</li>
    <li>Secs</li>
  </div>
</div>

<script>
var target_date = new Date("March 8, 2020 15:24:25").getTime()  // set the countdown date

var days, hours, minutes, seconds; // variables for time units

var countdown = document.getElementById("tiles"); // get tag element

getCountdown();

setInterval(function () { getCountdown(); }, 1000);

function getCountdown(){

	// find the amount of "seconds" between now and target
	var current_date = new Date().getTime();
	var seconds_left = (target_date - current_date) / 1000;

	days = pad( parseInt(seconds_left / 86400) );
	seconds_left = seconds_left % 86400;
		 
	hours = pad( parseInt(seconds_left / 3600) );
	seconds_left = seconds_left % 3600;
		  
	minutes = pad( parseInt(seconds_left / 60) );
	seconds = pad( parseInt( seconds_left % 60 ) );

	// format countdown string + set tag value
	countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>"; 
	 if (seconds_left < 0) {
   countdown.innerHTML =  '<div class="fs40">YOUR CLASS HAS STARTED</div>';
       var alerted = localStorage.getItem('alerteeee') || '';
	     // alerted='No';

    if (alerted != 'yes') {
     alert("CLASS 3 STARTED");
     localStorage.setItem('alerteeee','yes');
    }

  }
}
function pad(n) {
return (n < 10 ? '0' : '') + n;
}

document.write("\n\n\n");
document.write("\n\n\n");

</script>

<script>
//var target_date = new Date("March 8, 2020 12:45:25").getTime()  // set the countdown date
var target_date1 = new Date("March 8, 2020 15:24:55").getTime()
  // set the countdown date

var days1, hours1, minutes1, seconds1; // variables for time units

var countdown1 = document.getElementById("tiles1"); // get tag element

getCountdown1();

setInterval(function () { getCountdown1(); }, 1000);

function getCountdown1(){

	// find the amount of "seconds" between now and target
	var current_date1 = new Date().getTime();
	var seconds_left1 = (target_date1 - current_date1) / 1000;

	days1 = pad( parseInt(seconds_left1 / 86400) );
	seconds_left1 = seconds_left1 % 86400;
		 
	hours1 = pad( parseInt(seconds_left1 / 3600) );
	seconds_left1 = seconds_left1 % 3600;
		  
	minutes1 = pad( parseInt(seconds_left1 / 60) );
	seconds1 = pad( parseInt( seconds_left1 % 60 ) );

	// format countdown string + set tag value
	countdown1.innerHTML = "<span>" + days1 + "</span><span>" + hours1 + "</span><span>" + minutes1 + "</span><span>" + seconds1 + "</span>"; 
	 if (seconds_left1 < 0) {
   countdown1.innerHTML =  '<div class="fs40">YOUR CLASS HAS STARTED</div>';
    var alerted= localStorage.getItem('alerteee') || '';

    if (alerted != 'yes') {
     alert("CLASS 1 STARTED");
     localStorage.setItem('alerteee','yes');
    }

  }
}
function pad(n) {
return (n < 10 ? '0' : '') + n;
}
document.write("\n\n\n");
document.write("\n\n\n");

</script>


<script>
//var target_date = new Date("March 8, 2020 12:45:25").getTime()  // set the countdown date
var target_date2 = new Date("March 8, 2020 15:24:45").getTime()  // set the countdown date

var days2, hours2, minutes2, seconds2; // variables for time units

var countdown2 = document.getElementById("tiles2"); // get tag element

getCountdown2();

setInterval(function () { getCountdown2(); }, 1000);

function getCountdown2(){

	// find the amount of "seconds" between now and target
	var current_date2 = new Date().getTime();
	var seconds_left2 = (target_date2 - current_date2) / 1000;

	days2 = pad( parseInt(seconds_left2 / 86400) );
	seconds_left2 = seconds_left2 % 86400;
		 
	hours2 = pad( parseInt(seconds_left2 / 3600) );
	seconds_left2 = seconds_left2 % 3600;
		  
	minutes2 = pad( parseInt(seconds_left2 / 60) );
	seconds2 = pad( parseInt( seconds_left2 % 60 ) );

	// format countdown string + set tag value
	countdown2.innerHTML = "<span>" + days2 + "</span><span>" + hours2 + "</span><span>" + minutes2 + "</span><span>" + seconds2 + "</span>"; 
	 if (seconds_left2 < 0) {
   countdown2.innerHTML =  '<div class="fs40">YOUR CLASS HAS STARTED</div>';
   var alerted = localStorage.getItem('alertie') || '';
    if (alerted != 'yes') {
     alert("CLASS 2 STARTED");
     localStorage.setItem('alertie','yes');
    }

  }
}

function pad(n) {
return (n < 10 ? '0' : '') + n;
}


</script>


</body>
</html>
