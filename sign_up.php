<html>
    <head>
       
        <link rel="stylesheet" href="header_links.html">
        
    </head>
    <body style="background-color:ghostwhite">

        <div>

            <?php 
            require_once 'vendor/autoload.php';

            $connection = new MongoDB\Client;
            $db = $connection->minidb;
            $collection = $db->patient_registration;
            $collection2 = $db->doctcollection;
            $upload_dir = "../upload/";
            
            
            include "header.html";?>
        </div>

        
        <center>
            
            <div data-aos="fade-right" data-aos-duration="2000" style="width:30%;">
                
                <form  class="form-group" name="" action="sign_up_1.php" method="post" class="form-group" enctype="multipart/form-data">
                    
                    <font style="font-size:150%; font-weight:bolder; font-color:lightblue;">Sign Up Using</font> 
                    <br><br>
                    
                    <a href="www.facebook.com">
                    <div style="width:70%; background-color:rgb(58, 85, 159); color:white;">    
                        <img src="facebook2.png" width="12%" height="5%"></img>
                        Log in with Facebook
                    </div> 
                    </a>

                    <br>
                    
                    <font style="font-size:150%; font-color:lightblue;">or</font><br><br>
                    
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required><br>
                    <input type="text" class="form-control" name="mname" id="mname" placeholder="Middle Name" required><br>
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required><br>
                    <div class="form-group">
                    <select class="form-control" id="sel1" name="sel1">
                        <option>Select Role</option>
                        <option>Doctor</option>
                        <option>Patient</option>
                    </select><br>
                    <input type="text" class="form-control" name="bldgrp" id="bldgrp" placeholder="Blood Group" required>
                    <table>                    
                        <tr>
                            <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <label style="margin-right:90px ;"> Gender</label><br>
</td>
<td>
                             <p ><input style="margin-top:30px;margin-left:10px" type="radio"  name="gender" id="male" value="male"> Male</p>
</td>
<td>
                             <p ><input style="margin-top:30px;margin-left:10px" type="radio"  name="gender" id="female" value="female" > Female</p>
</td>
<td>
                             <p ><input style="margin-top:30px;margin-left:10px" type="radio"  name="gender" id="other" value="other"> Other </p>
</td>
</tr>
</table> 
                    Date of Birth<input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth" required><br>            
                    <input type="number" class="form-control" name="age" id="age" placeholder="Age" required>
                    <br><input type="text" class="form-control" name="contact" id="contact" placeholder="Contact No." required><br>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" required><br>
        
        
                    <textarea type="text" class="form-control" name="address" id="address" placeholder="Address" required></textarea><br>
                    
                    <input type="text" class="form-control" name="username" id="username" placeholder="username" required><br>
                    <input type="password" class="form-control" name="password" id="password" placeholder="password" required><br>
                    <input type="password" class="form-control" name="password1" id="password1" placeholder="Confirm Password" required><br>
                    Adhar Card: <input type="file" name="adh" id="adh" placeholder="adh"><br><br>
                    <button type="submit" value="Login" class="btn btn-primary" name="admin_login">Sign Up</button>
                    <br><br>

                    Have an account &nbsp&nbsp <a href="login.php">Log In</a>
                </form>
            </div>
        </center>

        <div>
            <?php include "footer.html";?>
        </div>
        
        <?php
        
        require 'vendor/autoload.php';

//        session_start();
        $connection = new MongoDB\Client;
        $db = $connection->project;
        $collection = $db->doctor_register;
        $collection2 = $db->patient_register;
        $upload_dir = "../upload/";

        if($_POST['admin_login']){
            
            
            error_reporting(E_ERROR);

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
                header("Location:index.php");
                if(move_uploaded_file($_FILES['adh']['tmp_name'], $upload_dir .$_FILES['adh']['name'])) {
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

        ?>



    </body>
</html>