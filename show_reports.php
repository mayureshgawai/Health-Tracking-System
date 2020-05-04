<html>
    <head>
       
        <link rel="stylesheet" href="header_links.html">
        
    </head>
    
    <body style="background-color:white">
        
        <div>
            <?php include "user_header.html";?>
        </div>

        <center><br>
        <div>
            <?php include "user_profile_highlights.html";?>
        </div>
        </center>

        <div>
        &nbsp&nbsp&nbsp<a href="user_profile.php">Go Back</a>
            <center>
            <font style="font-weight:bold; font-size:150%; color:black; font-family:initial;">
                Reports</font>
                <br><br>
                <table class="table table-bordered table-hover" style="width:50%; color:rgb(102, 139, 243); height:20%; font-size:120%; font-family:initial; text-align:center;">
                    <thead>
                        <tr style="background-color:rgb(93, 129, 230); color:white;">
                            <th style="text-align:center;">Sr No.</th>
                            <th style="text-align:center;">Reports</th>
                            <th style="text-align:center;">Upload</th>
                        </tr>
                    </thead>
                    <tbody style="color:black;">
                        <tr>
                            <td>1</td>
                            <td>Blood</td>
                            <td><input type="file" id="adhar_img" name="adhar_img" accept="image/*"></td>
                        </tr>
                        
                        <tr>
                            <td>2</td>
                            <td>Sonography </td>
                            <td><input type="file" id="adhar_img" name="adhar_img" accept="image/*"></td>
                        </tr>
                        
                        <tr>
                            <td>3</td>
                            <td>Pathology</td>
                            <td><input type="file" id="adhar_img" name="adhar_img" accept="image/*"></td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Diagnostic</td>
                            <td><input type="file" id="adhar_img" name="adhar_img" accept="image/*"></td>
                        </tr>
                    </tr>
                </table>

            </center>
        </div>

        <div>
            <?php include "footer.html";?>
        </div>

    </body>
        
</html>