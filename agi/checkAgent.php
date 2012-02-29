<?php
/*
* checkAgent
* check the agent status
*/


set_time_limit(30);
error_reporting(E_ALL);


include('../inc/config.php');
require_once('../inc/phpagi-asmanager.php');

$trunk = "SIP/myvoipprovider";


// here we have some logic to retrieve the data..
$agentExtension = "SIP/1000";  //get from system session
$context = "sip-ubds";

$manager = new AGI_AsteriskManager();
$con = $manager->connect($AMI_IP, $AMI_USER, $AMI_PASS);

$orig = $manager->ExtensionState($agentExtension, NULL);

var_dump($orig);
?>
