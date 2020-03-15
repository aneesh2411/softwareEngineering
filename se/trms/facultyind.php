<?php

//index.php

//include('header.php');

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
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
<style>
.anees{

 float: right;
    margin: 5px 0px;
    width: 200px;


}

table {
  width: 80%;
}

</style>
<body>

<div class="container" style="margin-top:30px">
  <div class="card">
  	<div class="card-header">
      <div class="row">
        <div class="col-md-9">Overall Student Attendance Status</div>
        <div class="col-md-3" align="right">
          
        </div>
      </div>
    </div>
  	<div class="card-body">
  		<div class="table-responsive">
        <table style="width:80%;" class="table table-striped table-bordered" id="student_table">
          <thead>
            <tr>
              <th>Roll no</th>
              <th>Name</th>
              <th>Username</th>
			
            </tr>
          </thead>
          <tbody>
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$db = mysqli_connect("localhost","root","","trms") or die('Server error');

if(isset($_POST['login']))
{

$v=$_POST['atten'];
$sy=$_POST['birthday'];


mysqli_query($db,"INSERT INTO `atten_state`(`ID`, `Atten_state`,`date`) VALUES (1,'$v','$sy')");
$v=$_POST['a'];

mysqli_query($db,"INSERT INTO `atten_state`(`ID`, `Atten_state`,`date`) VALUES (16,'$v','$sy')");
$v=$_POST['b'];

mysqli_query($db,"INSERT INTO `atten_state`(`ID`, `Atten_state`,`date`) VALUES (17,'$v','$sy')");
$v=$_POST['c'];

mysqli_query($db,"INSERT INTO `atten_state`(`ID`, `Atten_state`,`date`) VALUES (18,'$v','$sy')");
$v=$_POST['d'];

mysqli_query($db,"INSERT INTO `atten_state`(`ID`, `Atten_state`,`date`) VALUES (19,'$v','$sy')");


echo "<script>alert('Attendance taken');</script>";


}
  
    

if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}
$d=$_SESSION['trmsaid'];
$sql = mysqli_query($db,"SELECT `ID`, `AdminName`, `UserName`, `MobileNumber`, `Email` FROM `tbladmin`");
$i = 0;
while($row=mysqli_fetch_array($sql))

{
@$var1= $row['ID'];
@$var2=$row['AdminName'];

@$var3=$row['UserName'];







?>

<form method="post">

<tr>
<td> <?php echo @$var1;?></td>

<td> <?php echo @$var2;?></td>

<td><?php echo @$var3;?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<!--<input align="right" type="submit" name="si" value="Work on it">-->
</td>









</tr>
<?php
}

?>
<div class="anees">
  <input type="date" id="birthday" name="birthday">
</br>
</br>

  <select name="atten" >
  <option value="p">Present</option>
  <option value="ab">Absent</option>
</select>	
</br>
</br>



<select name="a" >
  <option value="p">Present</option>
  <option value="ab">Absent</option>
</select>
</br>
</br>
	


<select name="b" >
  <option value="p">Present</option>
  <option value="ab">Absent</option>
</select>
</br>
</br>
	


<select name="c" >
  <option value="p">Present</option>
  <option value="a">Absent</option>
</select>	
</br>
</br>


<select name="d" >
  <option value="p">Present</option>
  <option value="a">Absent</option>
</select>	
</div>

          </tbody>
        </table>
  		</div>
  	</div>
  </div>
</div>
 <center><button id="btn" type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="login">submit</button></center>
</form>


<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="css/datepicker.css" />

<style>
    .datepicker
    {
      z-index: 1600 !important; /* has to be larger than 1050 */
    }
</style>

<div class="modal" id="formModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Make Report</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <div class="input-daterange">
            <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
            <span id="error_from_date" class="text-danger"></span>
            <br />
            <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
            <span id="error_to_date" class="text-danger"></span>
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="hidden" name="student_id" id="student_id" />
        <button type="button" name="create_report" id="create_report" class="btn btn-success btn-sm">Create Report</button>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<script>
$(document).ready(function(){
	 
  var dataTable = $('#student_table').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"attendance_action.php",
      type:"POST",
      data:{action:'index_fetch'}
    }
  });

  $('.input-daterange').datepicker({
    todayBtn:"linked",
    format:"yyyy-mm-dd",
    autoclose:true,
    container: '#formModal modal-body'
  });

  $(document).on('click', '.report_button', function(){
    var student_id = $(this).attr('id');
    $('#student_id').val(student_id);
    $('#formModal').modal('show');
  });

  $('#create_report').click(function(){
    var student_id = $('#student_id').val();
    var from_date = $('#from_date').val();
    var to_date = $('#to_date').val();
    var error = 0;
    if(from_date == '')
    {
      $('#error_from_date').text('From Date is Required');
      error++;
    }
    else
    {
      $('#error_from_date').text('');
    }
    if(to_date == '')
    {
      $('#error_to_date').text('To Date is Required');
      error++;
    }
    else
    {
      $('#error_to_date').text('');
    }

    if(error == 0)
    {
      $('#from_date').val('');
      $('#to_date').val('');
      $('#formModal').modal('hide');
      window.open("report.php?action=student_report&student_id="+student_id+"&from_date="+from_date+"&to_date="+to_date);
    }
  });

});
</script>


</body>
</html>