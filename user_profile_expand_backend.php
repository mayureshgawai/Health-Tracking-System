<?php
session_start();
require_once 'vendor/autoload.php';

$connection = new MongoDB\Client;
$db = $connection->project;
$collection = $db->patient_register;

$upload_dir = "../upload/";




if(isset($_POST['save_changes'])){

    error_reporting(E_ERROR);

    $insert1 = array(
        'first_name'=>$_POST['first_name_profile'],
        'middle_name'=>$_POST['middle_name_profile'],
        'last_name'=>$_POST['last_name_profile'],
        'gender'=>$_POST['gender'],
        'age'=>$_POST['age'],
        'blood_group'=>$_POST['blood_group'],
        'address'=>$_POST['address'],
        'username' => $_POST['username'],
        'password' => $_POST['password']
    );
    if($_FILES['adhar_card']){
        if(move_uploaded_file($_FILES['adhar_card']['tmp_name'],'upload/' .$_FILES['adhar_card']['name'])) {
            $insert1['adhar_card'] = $_FILES['adh']['name'];
        }
    }

    $db->patient_register->updateOne(['first_name'=> $_SESSION['name']], ['$set' => $insert1]);

    $_SESSION['name'] =  $_POST['first_name_profile'];
    $_SESSION['mname'] =  $_POST['middle_name_profile'];
    $_SESSION['lname'] =  $_POST['last_name_profile'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['contact'] =  $_POST['mobile_number'];
    $_SESSION['bldgrp'] =  $_POST['blood_group'];
    $_SESSION['address'] =  $_POST['address'];
    $_SESSION['username'] =  $_POST['username'];
    
    

    echo "<script> alert('Records Updated Successfully');</script>";
    header("Location:user_profile.php");
    

}

if(isset($_POST['view_image'])){

    ?>
    <img src="upload/<?= $_SESSION['adhar']; ?>">

<?php

}

?>