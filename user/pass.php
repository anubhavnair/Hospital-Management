<?php 

$pass = 'abc@123';

$spass = password_hash($pass, PASSWORD_DEFAULT);

echo $spass;
echo "<br>";
$verify = password_verify($pass, $spass);

if ($verify) {
	# code..
	echo "valid";
}
else{
	echo "wrong";
}

?>