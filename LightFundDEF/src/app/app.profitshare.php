
<?php
ini_set('log_errors', 0);
error_reporting(0);

$dataPoints = array(
	array("y" => $row['start'], "label" => "start"),
	array("y" => $row['day1'], "label" => "day1"),
	array("y" => $row['day2'], "label" => "day2"),
	array("y" => $row['day3'], "label" => "day3"),
	array("y" => $row['day4'], "label" => "day4"),
	array("y" => $row['day5'], "label" => "day5"),
	array("y" => $row['day6'], "label" => "day6")
);


?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../assets/css/dashboard.css">
   <script src="https://d3js.org/d3.v6.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
   <script src="./js/script.js"></script>


   <title>LightFund - Dashboard</title>
</head>
<body>

   <div id="sidebar">


      <div id="logo">
         <img id="dashLogo" src="../assets/img/logo.png" alt="LF logo">
      </div>


      <div id="side-items">


         <div onclick="goHome()" class="sidebar-item" id="item1">
            <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</p>
         
      
      </div>
         <div class="sidebar-item active" id="item2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profit Share</div>

         <div class="sidebar-item" id="item2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start New Challenge</div>


         <div class="sidebar-item" id="item2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Settings</div>

      </div>

      


   </div>


   <div id="navbar">

      <div id="nav-items">

         <div class="nav-item" id="accDetails">
            <p>Account Number: <span class="accNumvar">&#709;&nbsp;101010231</span> </p>
         </div>

         <div class="nav-item" id="dashName">
            <p>Edoardo Romano</p>
         </div>
      </div>
   </div>


<div id="yourData">
  <h2>Your Data:</h2>

  <table id="table1">

  <tr>
    <td>First Name:</td>
    <td>Edoardo</td>
    
  </tr>
  <tr>
    <td>Lat Name:</td>
    <td>Romano</td>
    
  </tr>
  <tr>
    <td>Net Profit Loss:</td>
    <td>+245 USD</td>
    
  </tr>
  <tr>
    <td>Total Trades:</td>
    <td>76</td>
    
  </tr>
 
  <tr>
    <td>Account Type:</td>
    <td>LF Standard</td>
   
  </tr>
  <tr>
    <td>Phase Number:</td>
    <td>Phase 1</td>
   
  </tr>
  <tr>
    <td>Account Status:</td>
    <td ><p id="accountStatus" class="statusActive" >Active</p></td>
   
  </tr>


</table>
  
</div>







<div id="footer">
   <p>Copyright LightFund 2021 - 2023</p>
</div>

   
</body>
</html>