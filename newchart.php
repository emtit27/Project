<?php
 require_once('inc/config.php');
 require_once('inc/func.php');
?>

  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart'], callback: drawChart});
      google.charts.setOnLoadCallback(drawChart);
      

      function drawChart() {
        var data = google.visualization.arrayToDataTable([

          ['date','# Of Successful Try','# Of Unsuccessful Try', 'Average Achieved Time (in seconed)'],
            
            <?php 
           
           if(isset($_GET['levelNum']) && is_numeric($_GET['levelNum']) && isset($_GET['childID']) && is_numeric($_GET['childID']) && isset($_GET['taskID']) && is_numeric($_GET['taskID'])){
           
             
             $systemMode=1;
             $levelNum = clearData($_GET['levelNum']);
             $childID = clearData($_GET['childID']);
             $taskID = clearData($_GET['taskID']);
           
             $result1 = $conn->query("SELECT * FROM chart_v  GROUP BY date HAVING  childID=$childID AND systemMode=$systemMode AND taskID=$taskID AND levelNum= $levelNum");
           


            while($row = $result1->fetch_assoc()) {

             
             $date =$row['date'];
        
              if($row['sessionID']){
              $sessionID =$row['sessionID'];
              


                $result3               =$conn->query("SELECT COUNT(successfulTry) AS totalsuccessfulTry FROM chart_v  WHERE  successfulTry='yes' AND sessionID='$sessionID' ");
                $successfulTryData     =$result3->fetch_assoc();
                $successfulTry         =$successfulTryData['totalsuccessfulTry'];

              
                $result4               =$conn->query("SELECT COUNT(successfulTry) AS totalunsuccessfulTry FROM chart_v  WHERE  successfulTry='no' AND sessionID='$sessionID' ");
                $unsuccessfulTryData   =$result4->fetch_assoc();
                $unsuccessfulTry       =$unsuccessfulTryData['totalunsuccessfulTry'];

                $result5               =$conn->query("SELECT AVG(AchievedTime) AS totalAchievedTime FROM chart_v WHERE sessionID='$sessionID' ");
                $AchievedTimeData      =$result5->fetch_assoc();
                $AchievedTimeAve       =$AchievedTimeData['totalAchievedTime'];
                
                
              }
              
                ?>
      
      
                ['<?php echo $date;?>',<?php echo $successfulTry;?>, <?php echo $unsuccessfulTry;?>, <?php echo date('s', $AchievedTimeAve);?>],
                <?php
              } 
            }?>
              
           ]);
           
  

         
        var options = {

          title: <?php 
          

            $taskID = clearData($_GET['taskID']);
            if ($taskID == '1'){
            ?>'Card Matching Task'<?php
            }if($taskID == '2'){
            ?>'Object Detecting Task'<?php
            }if($taskID == '3'){
            ?>'Picture Sequenceing Task'<?php
            }
          ?>,
              
          

        hAxis: {
          title: 'Date',
          
        },
          curveType: 'function',
          legend: { position: 'bottom' },
          
        };

        
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        google.visualization.events.addListener(chart, 'error', function (googleError) {
        google.visualization.errors.removeError(googleError.id);
      });
        
      
        chart.draw(data, options);
        

      }
        alert("no data recorded yet!")
        location.href= 'viewchildinfo.php?childID=<?php echo $childID?>'
      
     
    </script>




  </head>

  <body>

    <div id="curve_chart" style="width: 950px; height: 500px"></div>
  
  </body>
</html>
