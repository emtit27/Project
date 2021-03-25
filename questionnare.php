<?php  
//export.php  

    //&lsquo; &rsquo; < single '
    //&ldquo; &rdquo; << "
    // &#8210; << – 
require_once('inc/config.php');
require_once('inc/func.php');
// $conn = mysqli_conn("localhost", "root", "", "testing");
$output = '';
if(isset($_GET['childID'])&& is_numeric($_GET['childID']) ){
    $childID = clearData($_GET['childID']);
 $query = "SELECT * FROM questionnare WHERE childID=$childID";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" style="width:100%" border="1px">  
                    <tr>  
                            <th> Date</th> 
                            <th> Is this evaluation based on a time when the child </th>  
                            <th>1. Does not pay attention to details or makes careless mistakes
                            with, for example, homework </th>  
                            <th>2. Has difficulty keeping attention to what needs to be done</th>                      
                            <th>3. Does not seem to listen when spoken to directly</th>
                            <th>4. Does not follow through when given directions and fails to finish activities 
                            (not due to refusal or failure to understand)</th>
                            <th>5.  Has difficulty organizing tasks and activities</th>
                            <th>6. Avoids, dislikes, or does not want to start tasks that require ongoing 
                            mental effort</th>
                            <th>7. Loses things necessary for tasks or activities (toys, assignments, pencils,
                            or books)</th>
                            <th>8. Is easily distracted by noises or other stimuli</th>
                            <th>9.  Is forgetful in daily activities</th>
                            <th>10. Fidgets with hands or feet or squirms in seat</th>
                            <th>11. Leaves seat when remaining seated is expected</th>
                            <th>12. Runs about or climbs too much when remaining seated is expected</th>
                            <th>13. Has difficulty playing or beginning quiet play activities</th>
                            <th>14. Is &ldquo; on the go&rdquo; or often acts as if &ldquo; driven by a motor&rdquo;</th>
                            <th>15. Talks too much</th>
                            <th>16. Blurts out answers before questions have been completed</th>
                            <th>17. Has difficulty waiting his or her turn</th>
                            <th>18.  Interrupts or intrudes in on others&rsquo; conversations and/or activities</th>
                            <th>19. Argues with adults</th>
                            <th>20. Loses temper</th>
                            <th>21. Actively defies or refuses to go along with adults&rsquo; requests or rules</th>
                            <th>22. Deliberately annoys people</th>
                            <th>23. Blames others for his or her mistakes or misbehaviors</th>
                            <th>24. Is touchy or easily annoyed by others</th>
                            <th>25. Is angry or resentful</th>
                            <th>26. Is spiteful and wants to get even</th>
                            <th>27. Bullies, threatens, or intimidates others</th>
                            <th>28. Starts physical fights
                            </th>
                            <th>29. Lies to get out of trouble or to avoid obligations (ie,&ldquo;cons&rdquo; others)
                            </th>
                            <th>30. Is truant from school (skips school) without permission
                            </th>
                            <th>31.  Is physically cruel to people
                            </th>
                            <th>32. Has stolen things that have value
                            </th>
                            <th>33. Deliberately destroys other&rsquo;s property
                            </th>
                            <th>34. Has used a weapon that can cause serious harm (bat, knife, brick, gun)
                            </th>
                            <th>35. Is physically cruel to animals
                            </th>
                            <th>36. Has deliberately set fires to cause damage
                            </th>
                            <th> 37. Has broken into someone else&rsquo;s home, business, or car
                            </th>
                            <th>38.  Has stayed out at night without permission
                            </th>
                            <th>39. Has run away from home overnight
                            </th>
                            <th>40. Has forced someone into sexual activity
                            </th>	
                            <th>41. Is fearful, anxious, or worried
                            </th>
                            <th>42. Is afraid to try new things for fear of making mistakes
                            </th>
                            <th>43. Feels worthless or inferior
                            </th>
                            <th>44. Blames self for problems, feels guilty
                            </th>
                            <th>45. Feels lonely, unwanted, or unloved; complains that &ldquo;no one loves him or her &rdquo;
                            </th>
                            <th>46. Is sad, unhappy, or depressed
                            </th>
                            <th>47. Is self-conscious or easily embarrassed
                            </th>
                            <th>48. Overall school performance
                            </th>
                            <th>49. Reading	
                            </th>
                            <th>50. Writing
                            </th>
                            <th>51. Mathematics
                            </th>
                            <th>52. Relationship with parents
                            </th>
                            <th>53. Relationship with siblings
                            </th>
                            <th>54. Relationship with peers
                            </th>
                            <th>55. Participation in organized activities (eg, teams)
                            </th>
                            <th>Total number of questions scored 2 or 3 in questions 1&#8210;47:
                            </th>
                            <th>Total Symptom Score for questions 1&#8210;18:	
                            </th>
                            <th>Total number of questions scored 4 or 5 in questions 48&#8210;55:
                            </th>
                            <th> Average Performance Score:
                            </th>





                    </tr>
    ';
    


                    
                    while($row = mysqli_fetch_array($result))
                    {

                        //intilizeation
                        $avg = 0;
                        $avg_sum = 0;
                        $sum = 0;
                        $counter1 = 0; 
                        $i = 1;
                        $j =1;
                        $counter = 0;

                        // here to calculate # of qs.  
                        while ($j<=18){
                            $sum = $sum + $row ["q".$j] ;
                            $j++;
                        
                        }

                        // here to calculate # of qs. that have valus = 2 || = 3 
                        
                            while ($i<=47){
                            if ($row ["q".$i] == 2 ||$row ["q".$i] ==3 ) {

                                    $counter++;
                                }
                            $i++;
                        
                        }

                          // here to calculate # of qs. that have valus = 4 || = 5 and do the aver.
                        $counter1 = 0;
                       // $i= 48;
                        while ((48 <= $i) && ($i <= 55)){
                            if ($row ["q".$i] == 4 ||$row ["q".$i] ==5 ) {


                                    $counter1++;

                                }
                            
                            $avg_sum = $avg_sum + $row ["q".$i];

                            $i++;
                        
                        }
                            $avg = $avg_sum/8;




                    $output .= '
                        <tr>  
                            <td>'.$row["Date"].'</td>
                            <td>'.$row["Is this evaluation based on atime when the child"].'</td>  
                            <td>'.$row["q1"].'</td>  
                            <td>'.$row["q2"].'</td>  
                            <td>'.$row["q3"].'</td>  
                            <td>'.$row["q4"].'</td>
                            <td>'.$row["q5"].'</td>  
                            <td>'.$row["q6"].'</td>  
                            <td>'.$row["q7"].'</td>  
                            <td>'.$row["q8"].'</td>  
                            <td>'.$row["q9"].'</td>
                            <td>'.$row["q10"].'</td>
                            <td>'.$row["q11"].'</td>
                            <td>'.$row["q12"].'</td>
                            <td>'.$row["q13"].'</td>
                            <td>'.$row["q14"].'</td>
                            <td>'.$row["q15"].'</td>
                            <td>'.$row["q16"].'</td>
                            <td>'.$row["q17"].'</td>
                            <td>'.$row["q18"].'</td>
                            <td>'.$row["q19"].'</td>
                            <td>'.$row["q20"].'</td>
                            <td>'.$row["q21"].'</td>
                            <td>'.$row["q22"].'</td>
                            <td>'.$row["q23"].'</td>
                            <td>'.$row["q24"].'</td>
                            <td>'.$row["q25"].'</td>
                            <td>'.$row["q26"].'</td>
                            <td>'.$row["q27"].'</td>
                            <td>'.$row["q28"].'</td>
                            <td>'.$row["q29"].'</td>
                            <td>'.$row["q30"].'</td>
                            <td>'.$row["q31"].'</td>
                            <td>'.$row["q32"].'</td>
                            <td>'.$row["q33"].'</td>
                            <td>'.$row["q34"].'</td>
                            <td>'.$row["q35"].'</td>
                            <td>'.$row["q36"].'</td>
                            <td>'.$row["q37"].'</td>
                            <td>'.$row["q38"].'</td>
                            <td>'.$row["q39"].'</td>
                            <td>'.$row["q40"].'</td>
                            <td>'.$row["q41"].'</td>
                            <td>'.$row["q42"].'</td>
                            <td>'.$row["q43"].'</td>
                            <td>'.$row["q44"].'</td>
                            <td>'.$row["q45"].'</td>
                            <td>'.$row["q46"].'</td>
                            <td>'.$row["q47"].'</td>
                            <td>'.$row["q48"].'</td>
                            <td>'.$row["q49"].'</td>
                            <td>'.$row["q50"].'</td>
                            <td>'.$row["q51"].'</td>
                            <td>'.$row["q52"].'</td>
                            <td>'.$row["q53"].'</td>
                            <td>'.$row["q54"].'</td>
                            <td>'.$row["q55"].'</td>
                            <td>'.$counter.'</td>
                            <td>'.$sum.'</td>
                            <td>'.$counter1.'</td>
                            <td>'.$avg.'</td>
                        

                            
                    
                        
                        </tr>
    ';
                            }
                    }
                $output .= '</table>';
                } else {

        echo("No questionnare for this child !!");
    }
    
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=download questionnare.xls');
    echo $output;
//}



?>
