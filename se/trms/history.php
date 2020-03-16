<?php 

session_start();
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Table with database</title>
<style>
body{
background-color:#000000;
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
  text-align:center;

}
table{
width:70%;
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
table {
width: 70%;
color: #000000;
font-family: monospace;
font-size: 25px;
text-align: center;
table-layout:auto;
 border: 1px solid black;
 border-collapse: collapse;
}
.k{
width: 70px;
height: 30px


}
td, th {
border: 1px solid black;
  padding: 5px;
  text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2}

.topnav{
font-size:30px;

}
</style>
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
<form method="post">
<div class="topnav">
  <a class="active" href="#home"></a>
      <a> <strong> HISTORY OF OD APPLIED  </strong> </a>

	  </div>
<table align="center">
<caption>dsjvbsjv sdj cj </caption>
<tr>
<th id="id">ID  </th >
<th id="fname">FNAME</th>
<th id="lname">LNAME</th>
<th id="sdate">SDATE</th>
<th id="edate">EDATE</th>
<th id="rollno">ROLLNO</th>
<th id="branch">BRANCH</th>
<th id="number">NUMBER</th>
<th id="reason">REASON</th>
<th id="advisor">ADVISOR</th>



</tr>
<?php
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');



if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}
$d=$_SESSION['trmsaid'];
$sql = mysqli_query($db,"SELECT `id`, `fname`, `lname`, `sdate`, `edate`, `rollno`, `branch`, `number`, `reason`, `advisor`, `file` FROM `od` WHERE `id`=$d");

while($row=mysqli_fetch_array($sql))

{
@$var1= $row['id'];
@$var2=$row['fname'];

@$var3=$row['lname'];

@$var4=$row['sdate'];

@$var5=$row['edate'];
@$var6=$row['rollno'];

@$var7=$row['branch'];

@$var8=$row['number'];
@$var9=$row['reason'];
@$var0=$row['advisor'];




?>
<tr>
<td> <?php echo @$var1;?></td>

<td> <?php echo @$var2;?></td>

<td><?php echo @$var3;?>  			<!--<input align="right" type="submit" name="si" value="Work on it">-->
</td>

<td><?php echo @$var4;?></td>
<td><?php echo @$var5;?></td>

<td><?php echo @$var6;?></td>
<td><?php echo @$var7;?></td>
<td><?php echo @$var8;?></td>
<td><?php echo @$var9;?></td>
<td><?php echo @$var0;?></td>



</tr>
<?php
}

?>

</table>
</form>
</br>
</br>
</br>
</br>


<form method="post">
<div class="topnav">
  <a class="active" href="#home"></a>
      <a> <strong> HISTORY OF ML APPLIED   </strong> </a>

	  </div>

<tr>
<th id="id">ID  </th >
<th id="fname">FNAME</th>
<th id="lname">LNAME</th>
<th id="sdate">SDATE</th>
<th id="edate">EDATE</th>
<th id="rollno">ROLLNO</th>
<th id="branch">BRANCH</th>
<th id="number">NUMBER</th>
<th id="reason">REASON</th>
<th id="advisor">ADVISOR</th>



</tr>
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');



if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}
$d=$_SESSION['trmsaid'];
echo $d;
$sql = mysqli_query($db,"SELECT `id`, `firstname`, `lastname`, `startdate`, `enddate`, `rollno`, `branch`, `phoneno`, `reason`, `advisor` FROM `ml` WHERE `id`=$d");

while($row=mysqli_fetch_array($sql))

{
@$var1= $row['id'];
@$var2=$row['firstname'];

@$var3=$row['lastname'];

@$var4=$row['startdate'];

@$var5=$row['enddate'];
@$var6=$row['rollno'];

@$var7=$row['branch'];

@$var8=$row['phoneno'];
@$var9=$row['reason'];
@$var0=$row['advisor'];




?>
<tr>
<td> <?php echo @$var1;?></td>

<td> <?php echo @$var2;?></td>

<td><?php echo @$var3;?>  			<!--<input align="right" type="submit" name="si" value="Work on it">-->
</td>

<td><?php echo @$var4;?></td>
<td><?php echo @$var5;?></td>

<td><?php echo @$var6;?></td>
<td><?php echo @$var7;?></td>
<td><?php echo @$var8;?></td>
<td><?php echo @$var9;?></td>
<td><?php echo @$var0;?></td>



</tr>
<?php
}

?>

</table>
</form>
</br>
</br>
</br>
</br>

<form method="post">
<div class="topnav">
  <a class="active" href="#home"></a>
      <a> <strong> HISTORY OF ORDINARY APPLIED   </strong> </a>

	  </div>

<tr>
<th id="id">ID  </th >
<th id="fname">FNAME</th>
<th id="lname">LNAME</th>
<th id="sdate">SDATE</th>
<th id="edate">EDATE</th>
<th id="rollno">ROLLNO</th>
<th id="branch">BRANCH</th>
<th id="number">NUMBER</th>
<th id="reason">REASON</th>
<th id="advisor">ADVISOR</th>



</tr>
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');



if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}
$d=$_SESSION['trmsaid'];
$sql = mysqli_query($db,"SELECT `id`, `firstname`, `lastname`, `startdate`, `enddate`, `rollno`, `branch`, `pno`, `reason`, `advisor` FROM `ordinary` WHERE  `id`=$d");

while($row=mysqli_fetch_array($sql))

{
@$var1= $row['id'];
@$var2=$row['firstname'];

@$var3=$row['lastname'];

@$var4=$row['startdate'];

@$var5=$row['enddate'];
@$var6=$row['rollno'];

@$var7=$row['branch'];

@$var8=$row['pno'];
@$var9=$row['reason'];
@$var0=$row['advisor'];




?>
<tr>
<td> <?php echo @$var1;?></td>

<td> <?php echo @$var2;?></td>

<td><?php echo @$var3;?>  			<!--<input align="right" type="submit" name="si" value="Work on it">-->
</td>

<td><?php echo @$var4;?></td>
<td><?php echo @$var5;?></td>

<td><?php echo @$var6;?></td>
<td><?php echo @$var7;?></td>
<td><?php echo @$var8;?></td>
<td><?php echo @$var9;?></td>
<td><?php echo @$var0;?></td>



</tr>
<?php
}

?>

</table>
</form>


</body>
</html>