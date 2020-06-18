<html>
    <head>   
       <link rel="stylesheet" href="header_links.html">
    </head>

    <?php
    session_start();
    $session_xpire = false;
    if(!(isset($_SESSION['name'])))
    {    
      header("Location:index.php");
    }
    ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@669&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@669;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&family=Playfair+Display:wght@669;900&display=swap" rel="stylesheet">
        
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <style>
            .split {
          height: 100%;
          width: 50%;
          position: fixed;
          z-index: 1;
          top: 0;
          overflow-x: hidden;
          padding-top: 20px;
        }
        
        /* Control the left side */
        .left {
          left: 0;
        }
        
        /* Control the right side */
        .right {
          right: 0;
          
        }
        
        .avatar {
          vertical-align: middle;
          width: 50px;
          height: 50px;
          border-radius: 50%;
          position: relative;
          top: -5px;
          left: 200px;
        }

        table,th, td {
  padding: 3px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  border: 1px solid #ddd;
}

table {
  border-collapse: collapse;
  width: 55%;
  border-radius: 5px;
}

th {
  background-color: rgb(94, 116, 245);
  color: white;
}

td{
  background-color: rgb(221, 159, 221);
}



th, td {
  padding: 20px;
}

tr:hover {
  background-color: #ac1717;
  }


  table,th, td {
  padding: 3px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  border: 1px solid #ddd;
}

table {
  border-collapse: collapse;
  width: 55%;
  border-radius: 5px;
}

th {
  background-color: rgb(94, 116, 245);
  color: white;
}

td{
  background-color: rgb(221, 159, 221);
}



th, td {
  padding: 12px;
}



        <style>
            .split {
          height: 100%;
          width: 50%;
          position: fixed;
          z-index: 1;
          top: 0;
          overflow-x: hidden;
          padding-top: 20px;
        }
        
        /* Control the left side */
        .left {
          left: 0;
        }
        
        /* Control the right side */
        .right {
          right: 0;
          
        }
        
        .avatar {
          vertical-align: middle;
          width: 50px;
          height: 50px;
          border-radius: 50%;
          position: relative;
          top: -5px;
          left: 200px;
        }

        table,th, td {
        padding: 3px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        border: 1px solid rgb(32, 22, 22);
}

table {
        border-collapse: collapse;
         width: 70%;
        border-radius: 5px;
}


th {

  background-color: rgb(94, 116, 245);
  color: white;

}

td{

  background-color: rgb(226, 231, 224);

}



th, td {

  padding: 20px;

}

tr:hover {
  background-color: #ac1717;
  }



        
        
            </style>
         







    <style>
        .image_class{
          /*  background-image:url('health_care8.jpg'); */
            background-size: 100%;
            width: 98%;
            height:750px;
        }
    </style>


<?php

require_once 'vendor/autoload.php';
error_reporting(E_ERROR);
$connection = new MongoDB\Client;
$db = $connection->project;
$collection = $db->doctor_register;


$check = $collection->find([
  'role_check'=> 'Doctor'
  ]);

?>

    <body style="background-color:ghostwhite;font-size:15px">
        
        <div>
            <?php
            include "header.html";?>

            



        </div>
            
        <center>
            <div class="image_class">
            
                <br><br><br><br><br><br><br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <font style="font-weight:bolder; font-size: 450%; color:whitesmoke; text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.233), 10px 10px 10px rgba(0, 0, 0, 0.52); font-family:Georgia, 'Times New Roman', Times, serif ">DIGITIZATION</font><br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <font style="color:azure ;font-family:Georgia, 'Times New Roman', Times, serif; font-stretch:narrower; font-size:45;">IS THE FUTURE FOR</font><br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <font style="color:azure; font-family:Georgia, 'Times New Roman', Times, serif; font-stretch:narrower; font-size:45;"> HEALTHCARE</font>
                </h1><br><br><br><br><br><br><br><br>
            </div>
        </center>

<div class="panel panel-primary" style="width: 75%;height: 600px;position: absolute;left: 300px;top: 130px;">
    <div class="panel-heading">List of Doctors</div>
    <div class="panel-body" style = "font-family: 'DM Serif Text', serif;font-size:20px">
        

          <div>
          <?php

foreach($check as $check1 ){
?>      

            <table style="position: relative;left: 170px;top:70px;color: white;">
   
                <tr>
                  <th style="width: 30%;height: 20px;">Name</th>
                  <th>Contact</th>
                  <th>Workplace</th>
          
                  </tr>
                  <tr>
                          
                </tr>
          
                
                  
                <tr>
             
                  <td style="color:black;"><?php echo $check1['first_name']," ",$check1['last_name'];?></td>
                  <td style="color:black;"><?php echo $check1['contact']?></td>
                  <td style="color:black;"><?php echo $check1['address']?></td>
 
                                  
                </tr>
                
              </table>
            <?php
          }
            ?>
              


          </div>

          



    </div>

    

    
  </div>




<div class="container-fluid" style="position: relative;top: -700px;left:20px">
  <div class="row-fluid">
    <div class="span2" style="width: 17%;height: 240px;background-color:white;border-radius: 5px; box-shadow:5px 5px 10px grey;">
      <!--Sidebar content-->

      <img src="dc11.jpg" style="width: 70% ;height: 100px;position: relative;left: 30px;top: 8px;">
      <br>
      <br>

      <div id="textcontainer" style="position: relative;left: 60px;top: 8px;">

      <span><?php echo $_SESSION['name'],' ',$_SESSION['lname'];?> </span>
      <br>
      <span style="position: relative;top: 5px;"> <?php echo $_SESSION['contact'];?></span> <br>
      <span style="position: relative;top: 10px;"><?php echo $_SESSION['email'];?></span>
      
      </div>

      
      

      


    </div>
</div>




</div>




        
        <div>
            <?php include "footer.html";?>
        </div>
        
    </body>
</html>