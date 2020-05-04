<html>
    <head>
        <?php
        session_start();
        $session_xpire = false;
        if(!(isset($_SESSION['name'])))
        {    
            header("Location:index.php");
        }
        ?>
       
        <link rel="stylesheet" href="header_links.html">
        <style>
            .img_class {
            border-radius: 50%;
            }
        </style>

    </head>
    
    <body style="background-color:white">
        
        <div>
            
            <?php include "user_header.html";?>
        </div>
        
        <br>
        
        <center>
        <div style="width:50%; height:180%;">
                <br>
                <form action="user_profile_expand_backend.php" method="POST">
                <font style="font-weight:bold; font-size:150%; color:blue; font-family:initial;">
                Profile</font><br><br>
                <img class="img_class" src="doctor.jpg" style="width:100px; height:90px;">
                <br><br>
                
                <table border="0" style=" font-weight:bold;">
                    <tr><td style="font-size:20; color:rgb(79, 120, 233);">Personal Details</td></tr>
                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            
                            <label> First Name</label>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                           
                        </td>
                        <td>
                            <br>
                            <input style="width: 100%; height:5%;" type="text" class="form-control" name="first_name_profile" id="first_name_profile" placeholder="First Name"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                            <label> Middle Name</label>
                        </td>
                        <td>
                            <br>
                            <input style="width: 100%; height:5%;" type="text" class="form-control" name="middle_name_profile" id="middle_name_profile" placeholder="Middle Name"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                            <label> Last Name</label>
                        </td>
                        <td>
                            <br>
                            <input style="width: 100%; height:5%;" type="text" class="form-control" name="last_name_profile" id="last_name_profile" placeholder="Last Name"><br>
                        </td>
                    </tr>
        
                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <label> Gender</label>
                        </td>
                        <td>
                             <input  type="radio"  name="gender" id="gender" value="Male"> Male<br>
                             <input  type="radio"  name="gender" id="gender" value="Female"> Female<br>
                             <input  type="radio"  name="gender" id="gender" value="Other"> Other <br>
                        </td>
                        
                        
                    </tr>

                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <label> Age</label>
                        </td>
                        <td>
                            <br>
                            <input style="width: 50%; float:left; height:5%;" type="number" class="form-control" name="age" id="age" placeholder="Age"><br>
                        <br></td>
                    </tr>
                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <label> Blood Group</label>
                        </td>
                        <td>
                            <br>
                            <input style="width:58%; float:left; height:5%;" type="text" class="form-control" name="blood_group" id="blood_group" placeholder="Blood Group" required><br>
                        <br></td>
                    </tr>

                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <label> Mobile No.</label>
                        </td>
                        <td>
                            <br>
                            <input style="width: 100%; float:left; height:5%;" type="tel" class="form-control" pattern="[0-9]{10}" name="mobile_number" id="mobile_number" placeholder="Enter number"><br>
                        <br>
                         </td>
                    </tr>

                    
                    <tr>
                    
                    <td>Date of Birth:</td><td> <br><input type="date" class="form-control" name="dob" id="dob" placeholder="DOB"><br></td>
                    </tr>
                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <label> Address</label>
                        </td>
                        <td>
                            <br>
                            <textarea style="width: 150%; float:left; height:5%;" type="text" class="form-control" rows=5 name="address" id="address" placeholder="Enter Address"></textarea><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <label> Adhar Card</label>
                        </td>
                        <td>
                            <br>
                            <input type="file" name="adhar_card" id="adhar_card" accept="image/*">
                            <br>
                        </td>
                    </tr>

                    
                    <tr><td><br><font style="font-weight:bold; font-size:150%; color:blue;">Login Details</font></td></tr>
                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                            <label>Username</label>
                        </td>
                        <td>
                            <br>
                            <input type="text" class="form-control" name="username" id="username" placeholder="username" required><br>  </td>
                    
                        </td>
                    </tr>

                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                            <label>Password</label>
                        </td>
                        <td>
                            <br>
                            <input type="password" class="form-control" name="password" id="password" placeholder="password" required><br>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" value="Login" class="btn btn-primary" name="save_changes">Save Changes</button>
                        </td>
                    </tr>

                </table>
               <br>
            </form>
        </div>
        </center>

        <div>
        <br>
            <?php include "footer.html";
            ?>
        </div>
        

    </body>
</html>