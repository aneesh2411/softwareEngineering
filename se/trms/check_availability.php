<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');
if(!empty($_POST["UserName"])) {
	$email= $_POST["UserName"];
	echo $email;
		$result =mysqli_query($db,"SELECT UserName FROM tbladmin WHERE UserName='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Username already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Username available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
