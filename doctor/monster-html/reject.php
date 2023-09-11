<?php 

session_start();
include 'common/connect.php';

$id = $_GET['r_id'];
$status = 'rejected';
$time = strtotime('now');

$exe = $obj->query("update appoinment set status='$status',is_delete='1',is_delete_time='$time' where b_id='$id'");
if($exe)
  {
   
    echo "<script>alert('rejected');window.location='dashboard.php';</script>";
  }
  else
  {
    echo "<script>alert('Error');</script>";
  }

?>