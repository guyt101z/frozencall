<?php
/*
* linkCall
* link call betwen agent and lead
*/


set_time_limit(30);
error_reporting(E_ALL);



include('../inc/config.php');
require_once('../inc/phpagi-asmanager.php');

$trunk = "SIP/myvoipprovider";


// here we have some logic to retrieve the data..
$agent_number = "1001";  //get from system session
$client_number = "1002"; // get from leads table in the database

$manager = new AGI_AsteriskManager();
$con = $manager->connect($AMI_IP, $AMI_USER, $AMI_PASS);

//$orig = $manager->Originate("$trunk/$client_number", NULL, NULL, NULL, "Dial", "SIP/$agent_number");
$orig = $manager->Originate("SIP/1002", NULL, NULL, NULL, "Dial", "SIP/1001", NULL, "Call Center");
?>
