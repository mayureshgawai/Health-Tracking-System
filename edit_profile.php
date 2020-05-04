<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="header_links.html">
        
    </head>
    
    <body style="background-color:ghostwhite;">
        
        <div>
            
            <?php
            session_start();

            $session_xpire = false;
            if(!(isset($_SESSION['name'])))
            {    
                header("Location:index.php");
            }
            include "user_header.html";?>
        </div>
        
        <br>
        
        <center>
        <div class="container" style="background-color:white; width:50%; height:100%;">
                <br>
                <font style="font-weight:bold; font-size:150%; color:blue; font-family:initial;">
                Profile</font><br><br>
                <img class="img_class" src="doctor.jpg" style="width:120px; border-radius: 50%; height:110px;">
                <br><br>
                
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu1">Personal Details</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Contact Details</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu3">Account Details</a>
                </li>
            </ul>

                <div class="tab-content">
                    <div style="width:100%;" id="menu1" class="container tab-pane active">
                        <br>
                        <form class="form-group"  action="user_profile_expand_backend.php" method="POST">
                            <div class="form-row">
                                <div class="col">
                                    <label>Name:</label>
                                </div>
                                <div class="col">
                                    <input style="width: 100%; height:5%;" type="text" class="form-control" name="first_name_profile" id="first_name" value="<?php echo $_SESSION['name'];?>" placeholder="First Name">
                                </div>
                                <div class="col">
                                    <input style="width: 100%; height:5%;" type="text" class="form-control" name="middle_name_profile" id="middle_name" value="<?php echo $_SESSION['mname'];?>" placeholder="Middle Name">
                                </div>
                                <div class="col">
                                    <input style="width: 100%; height:5%;" type="text" class="form-control" name="last_name_profile" id="last_name" value="<?php echo $_SESSION['lname'];?>" placeholder="Last Name">
                                </div>
                            </div>

                                <br>

                            <div class="form-row">
                                <div class="col" style="text-align:right;">
                                    <label>Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp
                                    </label>
                                </div>

                                <div class="col">
                                <table>
                                <tr>
                                <td>
                             <p ><input style="margin-left:15px" type="radio"  name="gender" id="male" value="male" required> Male</p>
</td>
<td>
                             <p ><input  style="margin-left:15px" type="radio"  name="gender" id="female" value="female" required> Female</p>
</td>
<td>
                             <p ><input  style="margin-left:15px" type="radio"  name="gender" id="other" value="other" required> Other </p>
</td>
</tr>
                                </table>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                
                            </div>

                            <div class="form-row">
                                <div class="col" style="text-align:center;">
                                    <label>Age:
                                    </label>
                                </div>

                                <div class="col">
                                    <input style="width: 50%; float:left; height:5%;" type="number" class="form-control" name="age" id="age" value="<?php echo $_SESSION['age'];?>" placeholder="Age"><br>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                
                            </div>

                                <br>

                            <div class="form-row">
                                <div class="col" style="text-align:right;">
                                    <label>Blood Group:
                                    </label>
                                </div>

                                <div class="col">
                                <input style="width:80%; float:left; height:5%;" type="text" class="form-control" name="blood_group" id="blood_group" value="<?php echo $_SESSION['bldgrp'];?>" placeholder="Blood Group"><br>
                        
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                
                            </div>

                            <br>

                            <div class="form-row">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <div class="col" style="text-align:right;">
                                    <label>Adhar:
                                    </label>
                                </div>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <div class="col">
                                    
                                    <input type="file" id="img" name="img" accept="image/*">
                                    <button class="btn btn-primary" name="view_image">View</button>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                
                            </div>
                            <br>
                            

                    </div>
                    
                    <div id="menu2" class="container tab-pane fade"><br>
                        
                
                            <div class="form-row">
                                <div class="col" style="text-align:right;">
                                    <label>Address:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp
                                    </label>
                                </div>

                                <div class="col">
                                <textarea style="width: 190%; float:left; height:5%;" type="text" class="form-control" rows=5 name="address" id="address"><?php echo $_SESSION['address'];?></textarea><br>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                            </div>

                            <br>

                        

                    </div>
                    
                    <div id="menu3" class="container tab-pane fade"><br>
                        
                        
                            <div class="form-row">
                                <div class="col" style="text-align:right;">
                                    <label>Username:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp
                                    </label>
                                </div>

                                <div class="col">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="username" value="<?php echo $_SESSION['username'];?>"><br>  </td>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                
                            </div>
                                <br>
                            <div class="form-row">
                                <div class="col" style="text-align:right;">
                                    <label>Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp
                                    </label>
                                </div>

                                <div class="col">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" value="<?php echo $_SESSION['password'];?>"><br>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                
                            </div>
                            
                            <button type="submit" value="submit" class="btn btn-primary" name="save_changes" action="user_profile_expand_backend.php">Save Changes</button>
                        
                        </form>
                        
                    </div>
                </div>
            </div>
        </center>

        <div>    
            <?php include "footer.html";?>
        </div>

    </body>
</html>