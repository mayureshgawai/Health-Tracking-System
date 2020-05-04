<?php
        
        require 'vendor/autoload.php';

        session_start();
        $connection = new MongoDB\Client;
        $db = $connection->project;
        $collection = $db->doctor_register;
        $collection2 = $db->patient_register;

        

        if($_POST['admin_login']){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['sel1'];

        $log = array(
            'username'=> $username,
            'password'=> $password,
            'role_check'=> $role
        );

        if($log['role_check'] == 'Doctor'){

            $check = $db->doctor_register->findOne($log);

            $_SESSION['name'] =  $check['first_name'];
            $_SESSION['mname'] =  $check['middle_name'];
            $_SESSION['lname'] =  $check['last_name'];
            $_SESSION['role_check'] =  $check['role_check'];
            $_SESSION['contact'] =  $check['contact'];
            $_SESSION['bldgrp'] =  $check['blood_group'];
            $_SESSION['email'] =  $check['email'];
            $_SESSION['gender'] = $check['gender'];
            $_SESSION['username'] =  $check['username'];
            $_SESSION['password'] = $check['password'];
            $_SESSION['age'] = $check['age'];
            $_SESSION['address'] = $check['address'];
            $_SESSION['dob'] = $check['date'];

            if(!$check){
                echo "<script>alert('No such user found! Invalid username or password.')</script>";
                echo "<script>location.href='login.php'</script>";
            }
            else{
                header("Location:doc_profile.php");
            }
        }
        else if($log['role_check'] == 'Patient'){
            $check = $db->patient_register->findOne($log);

            $_SESSION['name'] =  $check['first_name'];
            $_SESSION['mname'] =  $check['middle_name'];
            $_SESSION['lname'] =  $check['last_name'];
            $_SESSION['role_check'] =  $check['role_check'];
            $_SESSION['contact'] =  $check['contact'];
            $_SESSION['bldgrp'] =  $check['blood_group'];
            $_SESSION['email'] =  $check['email'];
            $_SESSION['gender'] = $check['gender'];
            $_SESSION['username'] =  $check['username'];
            $_SESSION['password'] = $check['password'];
            $_SESSION['age'] = $check['age'];
            $_SESSION['address'] = $check['address'];
            $_SESSION['dob'] = $check['date'];
            $_SESSION['adhar'] = $check['adhar'];

            if(!$check){
                echo "<script>alert('No such user found! Invalid username or password. ')</script>";
                echo "<script>location.href='login.php'</script>";
            }
            else{
                header("Location:user_profile.php");
            }
        }
        
        
        //$check = $collection->find($log);
        
        

        // if($check){

        // header("Location:user_profile.php");

        // }     

    }
        
        ?>
