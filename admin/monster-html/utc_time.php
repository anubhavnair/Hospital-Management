<?php 

$utcTime = 1684473776; // UTC timestamp

$utcDateTime = new DateTime("@$utcTime");
$utcDateTime->setTimeZone(new DateTimeZone('UTC'));

$istTimeZone = new DateTimeZone('Asia/Kolkata');
$istDateTime = $utcDateTime;
$istDateTime->setTimeZone($istTimeZone);

$istTime = $istDateTime->format('Y-m-d H:i:s');
echo $istTime;


?>