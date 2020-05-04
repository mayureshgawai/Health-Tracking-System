<html>
    <head>   
       <link rel="stylesheet" href="header_links.html">
   </head>

    <body style="background-color:ghostwhite">

        <div>
            <?php include "header.html";?>
        </div>
        
        <center>
            <br>
            <div data-aos="fade-right" data-aos-duration="2000" style="width:25%;">
                
                <form  class="form-group" name="admin_login" action="login_check.php" method="post">

                    <font style="font-size:150%; font-weight:bolder; font-color:lightblue;">Sign In Using</font> 
                    <br><br>
                    
                    <a href="www.facebook.com">
                    <div style="width:70%; background-color:rgb(58, 85, 159); color:white;">    
                        <img src="facebook2.png" width="12%" height="5%"></img>
                        Log in with Facebook
                    </div> 
                    </a> 
                    
                    <br>
                    
                    <font style="font-size:150%; font-color:lightblue;">or</font><br><br>
                    Login as: <select class="form-control" id="sel1" name="sel1">
                        <option>Select Role</option>
                        <option>Doctor</option>
                        <option>Patient</option>
                    </select><br>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Email/Username"><br>
                    <input type="password" class="form-control" name="password" id="password" placeholder="password"><br>
                    <button type="submit" value="Login" class="btn btn-primary" name="admin_login">Login</button>
                    <br><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="#"> Forgot Password </a>
                </form>
            </div>
        </center>
        
        <div>
            <?php include "footer.html";?>
        </div>

        


    </body>
</html>