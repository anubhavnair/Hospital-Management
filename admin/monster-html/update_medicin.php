<?php

session_start();
include 'common/connect.php';

$id = $_GET['m_id'];

$is_delete='1';
$time = strtotime('now');

$exe = $obj->query("update medicine set is_delete='$is_delete',is_delete_time='$time' where m_id='$id'");

if ($exe) {
        # code...
       // move_uploaded_file($tmp, $path);
        echo "<script>alert('Medicine removed successfully');window.location='m_medical.php';</script>";
    }
    else
    {
        echo "<script>alert('error');</script>";
    }
?>