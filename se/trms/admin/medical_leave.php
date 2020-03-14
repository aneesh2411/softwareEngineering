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

if(isset($_POST['app']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];
$rollno= $_POST['rollno'];
$branch= $_POST['branch'];
$number = $_POST['number'];
$reason = $_POST['reason'];
$adv = $_POST['adv'];
$file= $_POST['file'];
print("gey");
mysqli_query($db,"INSERT INTO `ml`(`id`, `firstname`, `lastname`, `startdate`, `enddate`, `rollno`, `branch`, `phoneno`, `reason`, `advisor`, `file`) VALUES (NULL,'$fname','$lname','$sdate','$edate','$rollno','$branch','$number','$reason','$adv','$file')") or die("Erroorrrr....");
?>



<script>
alert('Your application has been submitted');
window.location='ind.php';

</script>

<?php
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>medical Leave Form </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, label {
      padding: 80;
      margin: 100;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 13px;
      color: #123;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      line-height: 50px;
      font-size: 50px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0  #004d00;
      }
      .banner {
      position: relative;
      height: 320px;
background: 
  linear-gradient(45deg,  transparent 4%, transparent 20%, #423246 50%),
  linear-gradient(-45deg, #8f5046 30%,  #A14436 3%, #4C2556 112%,  transparent 40% ),
  linear-gradient(-90deg, #A14436 50%, #A14436 50%, transparent 40% )
  ;    
    background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4);
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:#004d00;
      }
      .item input:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #004d00;
      color:#004d00;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #004d00;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #008000;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input,.name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form method="post">
        <div class="banner">
          <h1>Medical Leave Application Form</h1>
        </div>
		
        <div class="item">
          <label for="name"><b>Name</b><span>*</span></label>
          <div class="name-item">
            <input type="text" name="fname" placeholder="First" required/>
            <input  type="text" name="lname" placeholder="Last" required/>
          </div>
        </div>
        <div class="item">
          <label for="bdate"><b>Start date</b><span>*</span></label>
          <input  type="date" name="sdate" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
		  <div class="item">
          <label for="bdate"><b>End date</b><span>*</span></label>
          <input  type="date" name="edate" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <div class="name-item">
            <div>
              <label for="address"><b>Rollno</b><span>*</span></label>
              <input  type="text" name="rollno" required/>
            </div>
            <div>
              <label for="number"><b>Branch</b><span>*</span></label>
              <input  type="text" name="branch" />
            </div>
			  <div>
              <label for="number"><b>Phone Number</b><span>*</span></label>
              <input  type="number" name="number" />
            </div>
          </div>
        </div>
        <div class="item">
          <div class="name-item">
            <div>
              <label for="language"><b>Reason for the leave</b><span>*</span></label>
              <input  type="text" name="reason" size="100"><br>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="name-item">
          
          </div>
        </div>
        <div class="item">
          <label for="apply"><b>Class Advisor</b><span>*</span></label>
          <input  type="text" name="adv"/>
        </div>
       
        <div class="item">
          <label for="cv"><b>Upload medical certificate</b><span>*</span></label>
          <input   type="file" name="file" required/>
        </div>
     <!--   <div class="item">
          <label for="cover">Cover Letter<span>*</span></label>
          <input  id="cover" type="file" required/>
        </div>
        <div class="item">
          <label for="picture">Upload Picture</label>
          <input id="picture" type="file"/>
        </div>
        <div class="item">
          <label for="video">Video Presentation</label>
          <input  id="video" type="file"/>
        </div>-->
        <div class="btn-block">
          <button type="submit" href="ind.php" name="app">APPLY</button>
        </div>
      </form>
    </div>
  </body>
</html>