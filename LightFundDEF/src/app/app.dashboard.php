
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


         <div class="sidebar-item active" id="item1">
            <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</p>
         
      
      </div>
         <div onclick="goProfitShare()" class="sidebar-item" id="item2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profit Share</div>

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




<table id="table1">

  <tr>
    <td>Starting Balance:</td>
    <td>20.000 USD</td>
    
  </tr>
  <tr>
    <td>Current Balance:</td>
    <td>20.245 USD</td>
    
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


<div id="balancechart">

   <canvas id="myChart" style="width:100%;max-width:35%"></canvas>

   <script>
   var xValues = [50,60,70,80,90,100,110,120,130,140,150];
   var yValues = [7,8,8,9,9,9,10,11,14,14,15];

   new Chart("myChart", {
   type: "line",
   data: {
      labels: xValues,
      datasets: [{
         fill: false,
         lineTension: 0,
         backgroundColor: "",
         borderColor: "black",
         pointBackgroundColor: "black",
         data: yValues
      }]
   },
   options: {
      legend: {display: false},
      scales: {
         yAxes: [{ticks: {min: 6, max:16}}],
      }
   }
   });
   </script>

</div>



<div id="daysLeft">
   <div id="chartDLeft">

   <canvas id="myChart2"></canvas>

   <script>
   var xValues = [];
   var yValues = [3, 97];
   var barColors = [
   "#b91d47",
   "rgb(0, 54, 161)",
   "#2b5797",
   "#e8c3b9",
   "#1e7145"
   ];

   new Chart("myChart2", {
   type: "doughnut",
   data: {
      labels: xValues,
      datasets: [{
         backgroundColor: barColors,
         data: yValues
      }]
   },
   options: {
      title: {
         display: true,
        
      }
   }
   });
   </script>

   </div>
   <br>
   <br>

   <div style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" id="started-Dleft">Started on: </div>
   <div  style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" id="startedDate"></div>
   <br>
   <br>
   <div  style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;" id="textDLeft">Days Elapsed: 12/30</div>
</div>



<table id="table2">

   <tr>
      <th style="font-weight: bold; color: black; background-color: #e8e8e8; border: 1px solid gray;" >Equity</th>
      <th style="font-weight: bold; color: black; background-color: #e8e8e8; border: 1px solid gray; white-space: nowrap;">Today's MAX allowed drawdown (equity/Balance)</th>
      <th style="font-weight: bold; color: black; background-color: #e8e8e8; border: 1px solid gray;  white-space: nowrap;">Overall Equity StopOut</th>
      <th style="font-weight: bold; color: black; background-color: #e8e8e8; border: 1px solid gray; white-space: nowrap;">Violation</th>
      <th style="font-weight: bold; color: black; background-color: #e8e8e8; border: 1px solid gray; white-space: nowrap;">Platform</th>
    
  </tr>
  <tr>
  <td style="width: 20%; min-width: fit-content;white-space: nowrap;">20,000 USD</td>
      <td  style="width: 20%;border-collapse: collapse; margin: 0%; padding: 0%"> 
      <table style="border-collapse: collapse; padding: 0%!important; margin: 0%">
        <tr style="border-collapse: collapse; margin: 0%; padding: 0%">
          <td style="font-weight: bold; color: black; background-color: #e8e8e8;">Equity</td>
          <td> <span>9,654</span> USD </td>
          <td style="font-weight: bold; color: black; background-color: #e8e8e8;">Balance</td>
          <td style="border: 0px solid black"> <span>9,654</span> USD </td>
        </tr>
      </table></td>
    <td style="width: 20%;" class="goodData"> <span>9,500</span> USD </td>
    <td class="goodData" style="width: 20%;">No Violations Detected</td>
    <td style="width: 20%;">MetaTrader-4</td>
    
    
  </tr>
  

</table>


<table id="table3">

   <tr>
      <th style="font-weight: bold; color: black; background-color: #e8e8e8; border: 1px solid gray;" >Today's P/L</th>
      <th style="font-weight: bold; color: black; background-color: #e8e8e8; border: 1px solid gray; white-space: nowrap;">Profit Target</th>
      <th style="font-weight: bold; color: black; background-color: #e8e8e8; border: 1px solid gray;  white-space: nowrap;">Winrate</th>
      <th style="font-weight: bold; color: black; background-color: #e8e8e8; border: 1px solid gray; white-space: nowrap;">N. daily trades</th>
      <th style="font-weight: bold; color: black; background-color: #e8e8e8; border: 1px solid gray; white-space: nowrap;">Most traded instrument</th>
    
  </tr>
  <tr>
  <td  style="width: 18.1%;border-collapse: collapse; margin: 0%; padding: 0%"> 
      <table style="border-collapse: collapse; padding: 0%!important; margin: 0%">
        <tr style="border-collapse: collapse; margin: 0%; padding: 0%">
          
          <td style="white-space: nowrap;" class="goodData"> <span>+246.52</span> USD </td>
          <td style="font-weight: bold; color: black; background-color: #e8e8e8;">%</td>
          <td style="border: 0px solid black"> <span>2.46</span> % </td>
        </tr>
      </table></td>
      <td  style="width: 26%;border-collapse: collapse; margin: 0%; padding: 0%"> 
      <table style="border-collapse: collapse; padding: 0%!important; margin: 0%">
        <tr style="border-collapse: collapse; margin: 0%; padding: 0%">
          <td   style="font-weight: bold; color: black; background-color: #e8e8e8;">USD</td>
          <td style="white-space: nowrap;" > <span>700</span> USD </td>
          <td style="font-weight: bold; color: black; background-color: #e8e8e8;">%</td>
          <td style="border: 0px solid black"> <span>7</span> % </td>
        </tr>
      </table></td>
    <td style="width: 19%;"> <span>75</span> % </td>
    <td class="goodData" style="width: 18.4%;">43</td>
    <td style="width: 20%;">AUDUSD</td>
    
    
  </tr>
  

</table>




<div id="footer">
   <p>Copyright LightFund 2021 - 2023</p>
</div>

   
</body>
</html>