<?php 

session_start();

include 'common/connect.php';

$id = $_GET['reject_id'];
$time = strtotime('now');
$status = 'reject';
$is_delete = '1';
$is_update = '1';

$result = $obj->query("update doctor set  status = '$status',is_delete='$is_delete',is_update='$is_update',is_delete_time='$time',is_update_time='$time' where d_id='$id'");

	if ($result) {
		# code...
		echo "<script>alert('Application Rejected successfully');window.location='m_doctor.php';</script>";
	}
	else{
		echo "<script>alert('error');window.location='all_cat.php';</script>";
	}


?>