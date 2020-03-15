<?php
$db = mysqli_connect("localhost","root","","trms") or die('Server error');
$name=$_GET['a'];
    $filter_Result = mysqli_query($db,"Select ID,AdminName,UserName,MobileNumber,Email,AdminRegdate from tbladmin where UserName='$name'");

?>
<!doctype html>
<html lang="en">

<head>
<title>sdkjh sdv vkhs vsdh </title>
<style>
body{
background-color:#CC9999;
}
table{
border:1px solid black;
margin-left:auto;
margin-right:auto;
  font-family: arial, sans-serif;
  border-collapse: collapse;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
</head>
<body>
<form action="" method="post">
<table border="1" width="500">
<caption>dvsd sdvs </caption>
			 <?php while($row = mysqli_fetch_array($filter_Result)):?>
			<tr>
    <th id="id">ID:</th>
    <td><input type="hidden" name="un" value="<?php echo $row['UserName'];?>"<input type="text" name="id" value="<?php echo $row['ID'];?>"></td>
	
  </tr>
  <tr>
    <th>NAME:</th>
    <td><input type="text" name="nm" value="<?php echo $row['AdminName'];?>"></td>
	
  </tr>
  <tr>
    <th>USERNAME:</th>
    <td><input type="text" name="un" value="<?php echo $row['UserName'];?>"></td>
	
  </tr>
   <tr>
    <th>MOBILE NUMBER:</th>
    <td><input type="text" name="mo" value="<?php echo $row['MobileNumber'];?>"></td>
	
  </tr>
   <tr>
    <th>EMAIL:</th>
    <td><input type="text" name="em" value="<?php echo $row['Email'];?>"></td>
	
  </tr>
   <tr>
    <th>REGISTERED DATE:</th>
   <td><input type="text" name="reg" value="<?php echo $row['AdminRegdate'];?>"></td>
	
  </tr>
  <tr>
  <td> <input type="submit" name="s" value="Change Now" ></td>
                  <?php endwhile;?>
</tr>
  </table>
  </form>
  </body>
  </html>
  <?php
  if(isset($_POST['s'])){
    $w=$_POST['nm'];
	  $e=$_POST['un'];
  $t=$_POST['mo'];
    $h=$_POST['em'];
	  $u=$_POST['reg'];	  
	  $db = mysqli_connect("localhost","root","","trms") or die('Server error');
	   mysqli_query($db,"update tbladmin set AdminName='$w' , UserName='$e', MobileNumber='$t', Email='$h', AdminRegdate='$u' where UserName='$e'");
	   ?>
<script> window.location='myprofile.php';</script>
<?php
	   }
	   ?>