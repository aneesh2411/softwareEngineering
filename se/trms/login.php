<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');

if(isset($_POST['login'])) 
  {
 $username=$_POST['username'];
    $password=$_POST['password'];
	$_SESSION['uname'] = $username;
		$_SESSION['pwd'] = $password;

	$admin_query = "SELECT ID FROM tbladmin WHERE UserName=:username and Password=:password" ;
		$run = mysqli_query($db,$admin_query);
			$_SESSION['id']=$run;

//header("Location:ind.php");
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
echo "<script type='text/javascript'> document.location ='ind.php'; </script>";

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
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name" required="true" name="username">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                        </div>
                                <div class="checkbox">
                                    <label class="pull-left">
                                <a href="index.php">Back Home!!</a>
                                    <label class="pull-right">
                                <a href="fp.php" style="padding-left: 250px">Forgot Password?</a>
                            </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="login">Sign in</button>
                                
                            
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="admin/assets/js/main.js"></script>


</body>

</html>
