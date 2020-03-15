<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `ml` WHERE CONCAT(`id`, `firstname`, `lastname`, `rollno`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `ml`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "trms");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
			<caption>s v ffdvrf </caption>
                <tr>
                    <th id="id">Id</th>
                    <th id="fname">First Name</th>
                    <th id="lname">Last Name</th>
                    <th id="rollno">rollno</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['rollno'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
