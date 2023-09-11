<?php 
session_start();
include 'common/connect.php';


$is_delete = '1';
$is_delete_time = strtotime('now');
$id = $_GET['delid'];

$result = $obj->query("update category set is_delete='$is_delete',is_delete_time='$is_delete_time' where cat_id='$id'");

if ($result) {
	# code...
	echo "<script>alert('Delete Category successfully');window.location='all_cat.php';</script>";
}
else{
	echo "<script>alert('error');window.location='all_cat.php';</script>";
}


?>