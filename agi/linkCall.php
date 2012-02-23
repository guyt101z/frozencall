<?php
require_once ('../inc/phpagi-asmanager.php');
$server = "127.0.0.1";
$username = "foo"; // asterisk manager username
$secret = "bar";
$trunk = "SIP/myvoipprovider";


// here we have some logic to retrieve the data..
$agent_number = "1001";
$client_number = "1002";

$manager = new AGI_AsteriskManager();
$con = $manager->connect($server,$username,$secret);

//$orig = $manager->Originate("$trunk/$client_number", NULL, NULL, NULL, "Dial", "SIP/$agent_number");
$orig = $manager->Originate("SIP/1002", NULL, NULL, NULL, "Dial", "SIP/1001");
?>
