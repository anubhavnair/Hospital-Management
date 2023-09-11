<?php

$obj = new mysqli("localhost", "root", "", "hospital") or die("Database Connection Error");

if ($obj->connect_errno != 0) {
	echo $obj->connect_error;
	exit();
}

?>