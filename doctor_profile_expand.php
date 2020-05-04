<html>
    <head>
       
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
        <div style="width:50%; height:300%;">
                <br>
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
                            <input style="width: 100%; height:5%;" type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                            <label> Middle Name</label>
                        </td>
                        <td>
                            <br>
                            <input style="width: 100%; height:5%;" type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Middle Name"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                            <label> Last Name</label>
                        </td>
                        <td>
                            <br>
                            <input style="width: 100%; height:5%;" type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name"><br>
                        </td>
                    </tr>
        
                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <label> Gender</label>
                        </td>
                        <td>
                            <br>
                            <input style="width: 100%; height:5%;" type="text" class="form-control" name="gender" id="gender" placeholder="Gender"><br>
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
                            <input style="width: 100%; float:left; height:5%;" type="tel" class="form-control" pattern="[0-9]{10}" name="number" id="number" placeholder="Enter number"><br>
                        <br>
                         </td>
                    </tr>

                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <label> Email id</label>
                        </td>
                        <td>
                            <br>
                            <input style="width: 100%; float:left; height:5%;" type="text" class="form-control" name="email" id="email" placeholder="Email" required><br>
                        </td>
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
                            <input type="file" id="img" name="img" accept="image/*">
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

                    <tr><td><br><font style="font-weight:bold; font-size:150%; color:blue;">
                        Education and<br>Working Details
                        </font></td></tr>
                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                            <label>Qualification</label>
                        </td>
                        <td>
                            <br>
                            <input type="text" class="form-control" name="degree" id="degree" placeholder="Degree" required><br>  </td>
                    
                        </td>
                    </tr>

                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                            <label>Specialization</label>
                        </td>
                        <td>
                            <br>
                            <input type="text" class="form-control" name="special" id="special" placeholder="e.g. heart Surgen" required><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                            <label>Experience</label>
                        </td>
                        <td>
                            <br>
                            <input style="width: 50%;" type="number" class="form-control" name="exper" id="exper" placeholder="e.g. 4" required><br>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                            <label>Work History</label>
                        </td>
                        <td>
                            <br>
                            <textarea type="text" rows="6" style="width:130%;" class="form-control" name="work_hist" id="work_hist" placeholder="Enter Work History"></textarea><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                            <label>Current Work</label>
                        </td>
                        <td>
                            <br>
                            <textarea type="text" rows="6" style="width:130%;" class="form-control" name="cur_hist" id="cur_work" placeholder="Enter currenty where you are working"></textarea><br>
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
            
        </div>
        </center>

        <div>
        
            <?php include "footer.html";?>
        </div>

    </body>
</html>