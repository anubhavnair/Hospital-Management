<?php 

session_start();
include 'common/connect.php';

$id = $_GET['a_id'];
$status = 'accepted';
$time = strtotime('now');

$exe = $obj->query("update appoinment set status='$status',is_update='1',is_update_time='$time' where b_id='$id'");
if($exe)
  {
   
    echo "<script>alert('Accepted');window.location='dashboard.php';</script>";
  }
  else
  {
    echo "<script>alert('Error');</script>";
  }

?>