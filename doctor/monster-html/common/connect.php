<?php 

$obj = new mysqli("localhost","root","","hospital");

if($obj->connect_errno != 0)
{
	echo $obj->connect_error;
	exit();
}

?>