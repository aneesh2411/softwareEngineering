<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');

/*if(isset($_POST['login'])) 
  {
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql ="SELECT ID FROM tbladmin WHERE UserName=:username and Password=:password";
    $query=$dbh->prepare($sql);
    $query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['trmsaid']=$result->ID;
}
$_SESSION['login']=$_POST['username'];
echo "<script type='text/javascript'> document.location ='index.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>*/
if(isset($_POST['login']))
{

$name = $_POST['AdminName'];
$uname = $_POST['UserName'];
$mno = $_POST['MobileNumber'];
$email = $_POST['Email'];
$pass = $_POST['Password'];

mysqli_query($db,"INSERT INTO `tbladmin`(`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES (NULL,'$name','$uname','$mno','$email','$pass',current_timestamp())") or die("Erroorrrr....");
?>

<script> window.location='index.php';
 </script>
 <?php
}




?>

    
<!doctype html>
<html class="no-js" lang="en">
<head>
    
    <title>Login</title>
    

    <link rel="apple-touch-icon" href="apple-icon.png">
   


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark" style=" background-image: url('images/home-banner.jpg');">


    <div class="sufee-login d-flex align-content-center flex-wrap" >
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h3 style="color:black">Student ML/OD/Ordinary Leave Management System </h3>
                    <hr  color="red"/>
                </div>
                <div class="login-form">
                    <form action="" method="post" name="login">
                        
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" required="true" name="AdminName">
                        </div>
						<div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="UserName" required="true">
                        </div>
						<div class="form-group">
                                <label>Mobile no</label>
                                <input type="number" class="form-control" placeholder="Password" name="MobileNumber" required="true">
                        </div>
						<div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Confirm Password" name="Email" required="true">
                        </div>
						<div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" name="Password" required="true">
                        </div>
                                <div class="checkbox">
                                    <label class="pull-left">
                                <a href="../index.php">Back Home!!</a>
                                   
                            </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="login">Register</button>
                                
                            
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
