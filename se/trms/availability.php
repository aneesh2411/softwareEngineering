<?php 
require_once("includes/dbconnection.php");
if(!empty($_POST["UserName"])) {
	$UserName= $_POST["UserName"];
	
		$result =mysqli_query($con,"SELECT UserName FROM tbladmin WHERE UserName='$UserName'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> UserName already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> UserName available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>