<html>
    <head>
       
        <link rel="stylesheet" href="header_links.html">


        <script src="/angular.min.js"></script>
	    <script>
		
		var app=angular.module('myApp',[]);
		app.controller('myCtrl',function($scope)
		{

			$scope.names=["Maharashtra","Tamil Nadu","Andhra Pradesh","Madhya Pradesh"];
			$scope.add_city=function(state)
			{
				$scope.cities=[];
				if(state=="Maharashtra")
				{
					$scope.cities.push("Pune");
					$scope.cities.push("Mumbai");
                    $scope.cities.push("Aurangabad");
                    $scope.cities.push("Nagpur");
                    $scope.cities.push("Thane");
				}
				
				else if(state=="Tamil Nadu")
				{
					$scope.cities=["Madurai","Rameshwaram","Tiruchirappalli","Vellore","Ooty"];
				}
				else if(state=="Andhra Pradesh")
				{
					$scope.cities=["Hyderabad","Visakhapatnam","Vijaywada","Tirupati","Kurnool"];
				}
                else if(state=="Madhya Pradesh")
				{
					$scope.cities=["Bhopal","Indore","Gwalior","Ujjain","Satna"];
				}
			}
		});
	</script>
        
    </head>
    
    <body style="background-color:white"  ng-app="myApp" ng-controller="myCtrl">
        
        <div>
            <?php include "user_header.html";?>
        </div>

        <center><br>
        <div style="width:98%;">
            
            <div style="width:20%; height:100%; float:left; border-right: 2px solid lightgrey;">
                <div style="width:90%;">
                    <div style="background-color:white; border: 2px solid lightgrey; border-radius: 8px;">
                        <br><font style="font-weight:bold; font-size:150%; color:rgb(94, 82, 255); font-family:initial;">Profile</font><br><br>
                        <img src="admin3.png" style="width: 30%; height: 10% "></img><br><br>
                        <p style="text-align:left; font-size:110%; color:rgb(94, 123, 255); font-family:initial;">
                            &nbsp&nbsp Name:    <br>
                            &nbsp&nbsp Gender:  <br>
                            &nbsp&nbsp Age:  <br>
                            &nbsp&nbsp Blood Group:     <br>  
                        </p>
                    </div>

                    <br>

                    <div style="background-color:white; border: 2px solid lightgrey; border-radius: 8px;">
                        <br><font style="font-weight:bold; font-size:150%; color:rgb(94, 82, 255); font-family:initial;">Ongoing Treatments</font><br><br>
                        <p style="text-align:left; font-size:110%; color:rgb(94, 123, 255); font-family:initial;">
                        &nbsp&nbspNone
                        <br><br><br>
                        </p>
                    </div>  
                </div>
            </div>
        </div>
        </center>

        <div>
            &nbsp&nbsp&nbsp<a href="user_profile.php">Go Back</a>
           
            <center>
                <font style="font-weight:bold; font-size:150%; color:black; font-family:initial;">
                    Blood Banks</font>
                <br><br>
                <form action="">
                    <table style="width:50%; text-align:center;">
                        <tr>
                            <td>Select State: </td>
                            <td><select class="form-control" ng-model='selectedname' ng-options="x for x in names" ng-change="add_city(selectedname)">
                                </select>   
                            </td>
                            <td>Select City: </td>
                            <td><select class="form-control" ng-model="selected" ng-options="x for x in cities"></select>
                                
                            </td>
                        </tr>
                    </table>
                    <br>
                   
                    <table class="table table-bordered table-hover" style="font-size:110%; font-family:initial; border-width:1px; width:50%; text-align:center;">
                        <thead>
                            <tr style="background-color:rgb(93, 129, 230); color:white;">
                                <th style="text-align:center;">Sr No.</th>
                                <th style="text-align:center;">Blood Bank Name</th>
                                <th style="text-align:center;">Blood Availability</th>
                                <th style="text-align:center;">Address</th>
                                <th style="text-align:center;">City</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Abc Blood Bank</td>
                                <td>Yes</td>
                                <td>Ashowk chowk</td>
                                <td>Solpaur</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>DEF Blood Bank</td>
                                <td>No</td>
                                <td>Ashowk chowk</td>
                                <td>Solpaur</td>
                            </tr>
                        </tbody>
                    </table>
                </form> 
            </center>
        </div>

        <div>
            <?php include "footer.html";?>
        </div>

    </body>
        
</html>