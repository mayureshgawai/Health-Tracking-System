<html>
    <head>
       
        <link rel="stylesheet" href="header_links.html">
        
    </head>
    <script>
    function validate(){
    var email = document.getElementById("email").value;
    var pass = document.getElementById("password1").value;
    var mail_valid = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var password_valid = /^([a-z A-Z 0-9]{4,15})$/ ;

    if(mail_valid.test(email) == false){
        //alert("Invalid Email you have entered !");
        document.getElementById("email_warn").innerHTML= "Invalid Email format";
        document.getElementById("email_warn").style.visibility="visible";
        return false;
    }
    if(password_valid.test(pass) == false){
        document.getElementById("password_warn").innerHTML= "Invalid Password format";
        document.getElementById("password_warn").style.visibility="visible";
        return false;
    }
    }
    </script>




    <body style="background-color:ghostwhite">

        <div>

            <?php 
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
                    
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" ><br>
                    <input type="text" class="form-control" name="mname" id="mname" placeholder="Middle Name" ><br>
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" ><br>
                    <div class="form-group">
                    <select class="form-control" id="sel1" name="sel1">
                        <option>Select Role</option>
                        <option>Doctor</option>
                        <option>Patient</option>
                    </select><br>
                    <input type="text" class="form-control" name="bldgrp" id="bldgrp" placeholder="Blood Group" >
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
                    Date of Birth<input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth" ><br>            
                    <input type="number" class="form-control" name="age" id="age" placeholder="Age" >
                    <br><input type="text" class="form-control" name="contact" id="contact" placeholder="Contact No." ><br>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" ><br>
                    <label name="email_warn" id="email_warn" style="color: red;visibility:hidden;">Invalid Email format you entered !</label>
        
        
                    <textarea type="text" class="form-control" name="address" id="address" placeholder="Address" ></textarea><br>
                    
                    <input type="text" class="form-control" name="username" id="username" placeholder="username" ><br>
                    <input type="password" class="form-control" name="password" id="password" placeholder="password" ><br>
                    <input type="password" class="form-control" name="password1" id="password1" placeholder="Confirm Password" ><br>
                    <label name="password_warn" id="password_warn" style="color:red; visibility:hidden;">Invalid password format</label><br>
                    Adhar Card: <input type="file" name="adh" id="adh" placeholder="adh"><br><br>
                    <button type="submit" value="Login" class="btn btn-primary" name="admin_login" onClick="validate()">Sign Up</button>
                    <br><br>

                    Have an account &nbsp&nbsp <a href="login.php">Log In</a>
                </form>
            </div>
        </center>

        <div>
            <?php include "footer.html";?>
        </div>
        


    </body>
</html>