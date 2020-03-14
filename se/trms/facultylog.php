<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');

if(isset($_POST['teacher_login'])) 
  {
 $username=$_POST['teacher_emailid'];
    $password=$_POST['teacher_password'];
	$_SESSION['uname'] = $username;
		$_SESSION['pwd'] = $password;

	$admin_query = "SELECT `teacher_id` FROM `tbl_teacher` WHERE `teacher_emailid`=:username and `teacher_password`=:password" ;
		$run = mysqli_query($db,$admin_query);
			$_SESSION['id']=$run;

//header("Location:ind.php");
    $sql ="SELECT `teacher_id` FROM `tbl_teacher` WHERE `teacher_emailid`=:username and `teacher_password`=:password";
    $query=$dbh->prepare($sql);
    $query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
?>
<script> window.location='facultyind.php';
 </script>
 <?php

foreach ($results as $result) {
$_SESSION['trmsaid']=$result->ID;
}
$_SESSION['login']=$_POST['teacher_emailid'];
echo "<script type='text/javascript'> document.location ='facultyind.php'; </script>";

} else{
echo "<script>alert('Invalid Details');</script>";
}
}
  /*$username=$_POST['username'];
$password=$_POST['password'];
		$admin_query = "select * from tbladmin where UserName='$username' AND Password='$password' ";
		$run = mysqli_query($db,$admin_query);
		 if(mysqli_num_rows($run)==1)
    {
      $_SESSION['username']=$username;
      echo "<script>window.open('ind.php','_self')</script>";
    }*/

?>
    
<!doctype html>
<html class="no-js" lang="en">
<head>
    
    <title>Login</title>
    

    <link rel="apple-touch-icon" href="admin/apple-icon.png">
   


    <link rel="stylesheet" href="admin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="admin/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark" style=" background-image: url(admin/images/home-banner.jpg);">


<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Student Attendance System</h1>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4" style="margin-top:20px;">
      <div class="card">
        <div class="card-header">Teacher Login</div>
        <div class="card-body">
          <form method="post" id="teacher_login_form">
            <div class="form-group">
              <label>Enter Email Address</label>
              <input type="text" name="teacher_emailid" id="teacher_emailid" class="form-control" />
              <span id="error_teacher_emailid" class="text-danger"></span>
            </div>
            <div class="form-group">
              <label>Enter Password</label>
              <input type="password" name="teacher_password" id="teacher_password" class="form-control" />
              <span id="error_teacher_password" class="text-danger"></span>
            </div>
            <div class="form-group">
              <input type="submit" name="teacher_login" id="teacher_login" class="btn btn-info" value="Login" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">

    </div>
  </div>
</div>

    <script src="admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="admin/assets/js/main.js"></script>


</body>

</html>
