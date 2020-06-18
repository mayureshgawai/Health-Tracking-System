<html>
    <head>
       
        <link rel="stylesheet" href="header_links.html">
        
    </head>
    
    <body style="background-color:white">
    <div>
            <?php 
            session_start();
            include "user_header.html";
            $session_xpire = false;
            if(!(isset($_SESSION['name'])))
            {    
                header("Location:index.php");
            }
            ?>   
    </div>
    

        
        <center><br>
        <div style="width:98%;">
            
            <div style="width:20%; height:100%; float:left; border-right: 2px solid lightgrey;">
            <div style="width:90%;">
                <div style="background-color:white; border: 2px solid lightgrey;border-radius: 8px;">
                    <br><font style="font-weight:bold; font-size:150%; color:rgb(94, 82, 255); font-family:initial;">Profile</font><br><br>
                    <img src="admin3.png" style="width: 30%; height: 10% "></img><br><br>
                    <p style="text-align:left; font-size:110%; color:rgb(94, 123, 255); font-family:initial;">
                    <p>&nbsp&nbsp Name: <?=  $_SESSION['name'] ?></p>
                        <p>&nbsp&nbsp Email: <?php echo $_SESSION['email'];?> </p>
                        <p>&nbsp&nbsp Contact: <?php echo $_SESSION['contact'];?>  </p>
                        <p>&nbsp&nbsp Blood Group: <?php echo $_SESSION['bldgrp'];?>  </p>   
                        <p><a href="user_profile_expand_show.php">View Profile</a></p>
                    </p>
                </div>

                <br>
                <div style="background-color:white; border: 2px solid lightgrey; border-radius: 8px;">
                <br><font style="font-weight:bold; font-size:150%; color:rgb(94, 82, 255); font-family:initial;">Ongoing Treatments</font><br><br>
                <p style="text-align:left; font-size:110%; color:rgb(94, 123, 255); font-family:initial;">
                &nbsp&nbspNone
                </p>
                </div>  
                </div>

            </div>
            <!-- <div>
            <h2 style="float: left;color: aqua;">Logged in as Doctor</h2>

            </div> -->
            
            <div style="width:100%; height:100%; alignmet:left;">
                <br>
                <table style="font-family:initial; font-size:110%;">
                    <tr>
                        <td>
                            <center><br>
                            <a href="">
                            <img src="prescription.png" width="60%" height="60%"></img><br><br>
                             <a href="show_prescriptions.php">Presctiptions</a></img></a></center></a>
                        </td>

                        

                        <td>
                        <center>
                            <a href="doctor_list.php">
                            <img src="doctor.jpg" width="40%" height="30%"></img><br><br>
                            Preferred Doctors</a>  <br></center>
                        </td>
                    </tr>

                   
                    </tr>
                    
                </table>

            </div>
        </div>
        </center>

        <div>
            <?php include "footer.html";?>
        </div>

    </body>
</html>
