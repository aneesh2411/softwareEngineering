<?php 

session_start();
error_reporting(0);
include('includes/dbconnection.php');
session_start();
$search_result = $_SESSION['varname'];



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
 <table>
 <caption>dd sd vsv s</caption>
                <tr>
                    <th id="id">Id</th>
                    <th id="fname">First Name</th>
                    <th id="lname">Last Name</th>
                    <th id="rollno">rollno</th>
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
</body>
</html>
