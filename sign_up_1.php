<?php
        
        require 'vendor/autoload.php';

//        session_start();
        $connection = new MongoDB\Client;
        $db = $connection->project;
        $collection = $db->doctor_register;
        $collection2 = $db->patient_register;


try {

        if($_POST['admin_login']){
            
           
            error_reporting(E_ERROR);

            //$email = $_POST['email'];
           // require "email.php";

            $insert = array(
                'first_name' => $_POST['fname'],
                'middle_name' => $_POST['mname'],
                'last_name' => $_POST['lname'],
                'role_check' => $_POST['sel1'],
                'gender' => $_POST['gender'],
                'blood_group'=>$_POST['bldgrp'],
                'date' => $_POST['dob'],
                'age' => $_POST['age'],
                'contact' => $_POST['contact'],
                'email' => $_POST['email'],
                'address' => $_POST['address'],
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                
            );


            if($_FILES['adh']) {
                if(move_uploaded_file($_FILES['adh']['tmp_name'], 'upload/' .$_FILES['adh']['name'])) {
                    $insert['adhar'] = $_FILES['adh']['name'];       
                }
                else {
                    echo "Failed to upload adhar file.";
                }
            }

     
            if($insert['role_check'] == 'Doctor'){
                $collection->insertOne($insert);
            }
            else{
                $collection2->insertOne($insert);
            }
        
     
        }
        header("Location:login.php");
    }
    catch(Exception $e){
        echo "<script>alert('Something went wrong... Try another username!')</script>";
        header("Location:sign_up.php");
        //echo 'Message: ' .$e->getMessage();
    }
        ?>
