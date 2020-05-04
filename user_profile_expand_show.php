<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="header_links.html">
        
        <script>
            function myFunction() {
            location.replace("")
            }
        </script>
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

            error_reporting(E_ERROR);
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
                        <form class="form-group" name="" action="" method="post">
                            <div class="form-row">
                                <div class="col">
                                    <label>Name: </label>
                                </div>
                                <div class="col">
                                    <label name="first_name" id="first_name"><?php echo $_SESSION['name']; ?>
                                </div>
                                <div class="col">
                                    <label name="middle_name" id="middle_name"><?php echo $_SESSION['mname']; ?>
                                </div>
                                <div class="col">
                                    <label name="last_name" id="last_name"><?php echo $_SESSION['lname']; ?>
                                </div>
                            </div>

                                <br>

                            <div class="form-row" style="margin-left:40px;">
                                <div class="col" style="text-align:right;">
                                    <label>Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp
                                    </label>
                                </div>

                                <div class="col">
                                    <label name="gender" id="gender"><?php echo $_SESSION['gender'];?><br>
                                
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
                                    <label name="age" id="age"><?php echo $_SESSION['age'];?><br>
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
                                <label type="text" name="blood_group" id="blood_group"><?php echo $_SESSION['bldgrp'];?><br>
                        
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
                                  
                                    
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                
                            </div>
                            <br>
                        
                            <a href="edit_profile.php">
                                Edit Profile
                            </a>
                        </form>

                    </div>
                    
                    <div id="menu2" class="container tab-pane fade"><br>
                        
                        <form class="form-group" name="" action="" method="post">
                            

                            <div class="form-row">
                                <div class="col" style="text-align:right;">
                                    <label>Address:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp
                                    </label>
                                </div>

                                <div class="col">
                                <label style="width: 190%; float:left; height:5%;" type="text" class="form-control" rows=5 name="address" id="address" placeholder="Enter Address"></textarea><br>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                            </div>

                            <br>

                            
                            <a href="edit_profile.php">
                                Edit Profile
                            </a>

                            </form>


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
                                    <label name="username" id="username" ><?php echo $_SESSION['username'];?><br>  </td>
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
                                    <label name="password" id="password"><?php echo $_SESSION['password'];?><br>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>        
                            </div>
                            <a href="edit_profile.php">
                                Edit Profile
                            </a>
                            </div>
                </div>
            </div>
        </center>

        <div>    
            <?php include "footer.html";?>
        </div>

    </body>
</html>