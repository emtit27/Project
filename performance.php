
    <?php 
    
    require_once('inc/config.php'); 
    require_once('inc/func.php');
    
    ?>
    <?php
    ;
    $output = '';
    


    if(isset($_GET['childID'])&& is_numeric($_GET['childID']) ){
        $childID = clearData($_GET['childID']);
    
    $query = "SELECT S.date,S.startTime,S.endTime,T.taskname, L.levelNum, R.tryNumber, R.timeForTry, R.AchievedTime, R.successfulTry, R.numOfCorrectPlacemnt  
                    FROM session S,task T, level L, try R 
                            WHERE R.sessionID=S.sessionID 
                            AND R.TaskID=T.TaskID
                            AND R.childID=$childID
                            AND R.levelNum=L.levelNum";
    





        $result = mysqli_query($conn, $query);
        
    
    $output .= '
    <table class="table" style="width:100%" border="1px">  
                        <tr>  
                        <th>Session date</th>  
                        <th>Session start time</th>  
                        <th>Session end time</th> 
                    
                        <th>Task Name</th>  

                        <th>Level Num</th>  
                        
                    
                        <th>tryNumber</th>  

                        <th>Given time For Try (seconds) </th>  

                        <th>Time taken for try (seconds) </th> 

                        <th>Successful Try ? </th>  

                        <th>Number Of Correct Placemnt</th>  
                        
                        
                            
                        
                            </tr>
                        
    ';
    while($row = mysqli_fetch_array($result))
    {
    $output .= '        <tr>
                            <td>'.$row["date"].'</td>  
                            <td>'.$row["startTime"].'</td>  
                            <td>'.$row["endTime"].'</td> 
                            <td>'.$row["taskname"].'</td> 
                            <td>'.$row["levelNum"].'</td> 
                            <td>'.$row["tryNumber"].'</td>  
                            <td>'.$row["timeForTry"].'</td>  
                            <td>'.$row["AchievedTime"].'</td>  
                            <td>'.$row["successfulTry"].'</td>  
                            <td>'.$row["numOfCorrectPlacemnt"].'</td>  
                        </tr>
                        
                ';
    }
    


        $output.='</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=child performance data.xls');
        echo $output;


    }

  
    ?>
