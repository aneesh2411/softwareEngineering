<?php
class test1 extends \PHPUnit\Framework\TestCase
{
  public function testlogin()
  {  
    define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    
   $ret=mysqli_query($con,"SELECT * FROM tbladmin WHERE UserName='1707' and password='s23'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
    $this->assertTrue(true);   
}
else{
    $this->assertTrue(false);  
}
      
    
  }
}