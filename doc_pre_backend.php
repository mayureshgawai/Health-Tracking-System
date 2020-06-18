<?php

require_once 'vendor/autoload.php';

$connection = new MongoDB\Client;
$db = $connection->project;
$collection = $db->prescriptions;


$doc_name = $_POST['doctor_name'];
$hospital = $_POST['hospital'];
$pat_name = $_POST['patient_name'];
$disease = $_POST['disease'];
$remark = $_POST['remark'];
$contact = $_POST['contact'];
$bldgrp = $_POST['blood_pressure'];
$fever = $_POST['fever'];
$sugar = $_POST['sugar'];
$srno = $_POST['srno'];
$medicine = $_POST['medicines'];
$dose = $_POST['dose'];
$when = $_POST['when'];
$nxt_date = $_POST['nxt_date'];
$today = date("Y/m/d");

$insert2 = array(
    'Doctor_name' => $doc_name,
    'Hospital' => $hospital,
    'Patient_name' => $pat_name,
    'Disease' => $disease,
    'Remark' => $remark,
    'Contact' => $contact,
    'Blood_Group' => $bldgrp,
    'Fever' => $fever,
    'Sugar' => $sugar,
    'sr_no' => $srno,
    'Medicine' => $medicine,
    'Dose' => $dose,
    'When' => $when,
    "Prescription_date" => $today,
    'nxt_date' => $nxt_date,
    
);

$collection->insertOne($insert2);
echo "<script>alert('Prescription added Successfully !')</script>";
header("Location:doc_profile.php");


?>