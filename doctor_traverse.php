<?php

require 'vendor/autoload.php';

session_start();
$connection = new MongoDB\Client;
$db = $connection->project;
$collection = $db->doctor_register;
$collection2 = $db->patient_register;

$check = $collection->find(['first']);



?>