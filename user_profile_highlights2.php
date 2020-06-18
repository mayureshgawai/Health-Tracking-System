<html>
    <head>
       
        <link rel="stylesheet" href="header_links.html">
        
    </head>
    <body>
        <center><br>
        <div style="width:98%;">
            
            <div style="width:20%; height:100%; float:left; border-right: 2px solid lightgrey;">
                <div style="width:90%; ">
                    
                    <div style="background-color:white; border: 2px solid lightgrey; border-radius: 8px;">
                        <br><font style="font-weight:bold; font-size:150%; color:rgb(94, 82, 255); font-family:initial;">Profile</font><br><br>
                        <img src="admin3.png" style="width: 30%; height: 10% "></img><br>
                        <p style="text-align:left; font-size:110%; color:rgb(94, 123, 255); font-family:initial;">
                            &nbsp&nbsp Name: <?php echo $_SESSION['name'],' ',$_SESSION['lname'];?> <br>
                            &nbsp&nbsp Email: <?php echo $_SESSION['email'];?> <br>
                            &nbsp&nbsp Contact:<?php echo $_SESSION['contact'];?> <br>
                            
                        </p>
                        <a href="user_profile_expand_show.php">view profile</a>
                    </div>
                    
                    <br>

                        

                        </p>
                    </div>  
                </div>
            </div>
        </div>
        </center>
</body>
</html>