<html>
    <head>
        <link rel="stylesheet" href="header_links.html">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    </head>
    
    <body style="background-color:white">
        
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
       
        <br><br><br>
    <?php    
require_once 'vendor/autoload.php';
error_reporting(E_ERROR);
$connection = new MongoDB\Client;
$db = $connection->project;
$collectionp = $db->prescriptions;
$doc = $_POST['doc'];



$check = $collectionp->find([
    'Contact'=> $_SESSION['contact']
    ]);





    ?>
        <div>
            <?php include "user_profile_highlights1.php";?>
        </div>
        <div>
            &nbsp&nbsp&nbsp<a href="user_profile.php">Go Back </a>
            <center>
                <br>
                <font style="font-weight:bold; font-size:150%; color:black; font-family:initial;">
                Prescriptions</font>
                <br><br>
            

<table class="table table-bordered table-hover" style="font-size:110%; font-family:initial; border-width:1px; width:50%; text-align:center;">
                    <thead>
                        <tr style="background-color:rgb(93, 129, 230); color:white;">
                            <th style="text-align:center;">Sr No.</th>
                            <th style="text-align:center;">Name Of Doctor</th>
                            <th style="text-align:center;">Date</th>
                            <th style="text-align:center;"> Display</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    foreach($check as $check1){
                        // var_dump($check1);
                        $disease1 =  $check1['Disease'];
                        $remark1 = $check1['Remark'];
                        $bldgrp1 =  $check1['Blood_Group'];
                        $fever1 =  $check1['Fever'];
                        $sugar1 =  $check1['Sugar'];
                        $srno1 =  $check1['sr_no'];
                        $medicine1 =  $check1['Medicine'];
                        $dose1 =  $check1['Dose'];
                        $when1 = $check1['When'];
                        $prescdate1 =  $check1['Prescription_date'];
                        $nxt_date1 =  $check1['nxt_date'];echo("<br>");
                        
                        ?>

                        
                    
                        <tr>
                            <td><?php echo $srno1;?></td>
                            <td><?php echo $check1['Doctor_name'];?></td>
                            <td><?php echo $check1['Prescription_date']; ?></td>
                            <td>
                                <div class="container">

                                    <button type="button" style="background-color:rgb(102, 139, 243); border:0; " class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $srno1;?>">
                                        Open Prescription
                                    </button>

                                    <div class="modal fade" id="<?php echo $srno1; $srno1++; ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                            
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Prescription</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                    
                                                <div class="panel" style="width: 70%; height: 90%;">
                                                    
                                                    <div class="panel-heading" style="height:8%;">
                                                        <form class="form-group" name="" action="" method="post">
                                                            <span style="white-space:nowrap; font-size: 120%; font-weight: bolder; font-size:110%; font-family:initial;">   
                                                            Doctor Name: <label type="text" name="doc_name" id="doc_name"><?= $check1['Doctor_name']?></label>
                                                            </span>
                                                        </form>
                                                        <br>
                                                    </div>

                                                    <div class="panel-body">
                                                       
                                                        <div>
                                                            <form class="form-group" name="" action="" method="post">
                                                                <div class="form-row" style="font-size:110%; font-family:initial;">
                                                                    <div class="col">
                                                                    <label style="float:left;" >Date: <?php echo $check1['Prescription_date'];?></label><br><br>
                                                                        <label style="float:left;" >Full Name: <?php echo $_SESSION['name'],' ',$_SESSION['lname'];?></label><br><br>
                                                                        <label  style="float:left;">Disease: <?php echo $check1['Disease'];?></label> 
                                                                        <label type="text"  style="float:left;" name="disease" id="disease"></label>
                                                                        <br><br>
                                                                        <label  style="float:left;">Remarks: <?php echo $remark1;?></label>
                                                                        <label type="text"  style="float:left;" name="remarks" id="remarks"></label>
                                                                        <br><br>
                                                                        <label  style="float:left;">Blood Pressure: <?php echo $bldgrp1;?></label> 
                                                                        <label type="text"  style="float:left;" name="blood_pre" id="blood_pre"></label>
                                                                        <br><br>
                                                                        <label  style="float:left;">Fever: <?php echo $fever1;?></label> 
                                                                        <label type="text"  style="float:left;" name="fever" id="fever"></label>
                                                                        <br><br>
                                                                        <label  style="float:left;" >Sugar: <?php echo $sugar1;?></label> 
                                                                        <label type="text"  style="float:left;" name="sugar" id="sugar"></label>
                                                                    </div>
                                                                </div>
                                                            </form>    
                                                        </div>

                                                        <br>
                                                        <div>
                                                            <center>
                                                            <table border="1" style="width: 100%; text-align: center;font-size:110%; font-family:initial;">
                                                                <tr>
                                                                <th style="text-align: center;">Sr no.: </th>
                                                                <th style="text-align: center;">Medicine: </th>
                                                                <th style="text-align: center;">Dose: </th>
                                                                <th style="text-align: center;">When: </th>
                                                                <th style="text-align: center;">Additional</th>
                                                            
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td>
                                                                        <label><?php echo $sr_no1;?></label>
                                                                    </td>

                                                                    <td>
                                                                        <label><?php echo $medicine1;?></label>
                                                                </td>
                                                                
                                                                    <td>
                                                                            <label><?php echo $dose1;?></label>
                                                                    </td>

                                                                    <td>
                                                                            <label><?php echo $when1;?></label>
                                                                    </td>
                                                                    
                                                                    <td>
                                                                        <label></label>
                                                                    </td>  
                                                                </tr>
                                                            </table>
                                                            </center>
                                                        </div>

                                                    </div>
                                                <br><br>
                                                    <div class="input-group" style="width:50%;">
                                                        <form class="form-group" name="" action="" method="post">
                                                            <span style="white-space:nowrap; font-size:110%; font-family:initial;">   
                                                                &nbsp&nbsp&nbsp&nbsp
                                                                Next Visit: <label type="text" name="doc_name" id="doc_name"><?php echo $nxt_date1;?></label>
                                                            </span>
                                                        </form>
                                                    </div>    
                                                </div>

                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            
                            </td>
                        </tr>
                   


                        <?php
                    }?>
                    
                    </tbody>
                </table> 






             
            
            
            
            

            </center>
        </div>
       
        <div>
            <?php include "footer.html";?>
        </div>

    </body>
        
</html>