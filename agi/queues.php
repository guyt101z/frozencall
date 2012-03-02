<?php
/*
* queues
* Show queues
*/


set_time_limit(30);
error_reporting(E_ALL);



include('../inc/config.php');
require_once('../inc/phpagi-asmanager.php');

//$queue = "support";
//$interface = "SIP/1001";  //SIP extension of the Member




$manager = new AGI_AsteriskManager();
$con = $manager->connect($AMI_IP, $AMI_USER, $AMI_PASS);

$orig = $manager->Queues();
var_dump($orig);
$manager->disconnect();
?>
