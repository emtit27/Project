<?php require_once('inc/header.html.php'); ?>

<?php

//Get values pass 

if(isset($_GET['childID'])&& is_numeric($_GET['childID'])){

  
  $childID = clearData($_GET['childID']);

  $result = $conn->query('SELECT * FROM child  WHERE childID= $childID ');



  if ($result = $conn -> query("SELECT * FROM child WHERE childID= $childID")) {
 
    $childData = $result->fetch_assoc();

   
  }

   
?>


<div class="info-content" >
<h1>Child Information</h1>
<br>
<h5>Child name: <?php
// Echo session variables that were set on previous page
echo  $childData["childUsername"];?></h5>
<h5>Gender: <?php
// Echo session variables that were set on previous page
echo  $childData["gender"];?></h5>

<h5>Age: <?php
// Echo session variables that were set on previous page
echo  $childData["age"];?></h5>

<h5>ADHD type: <?php
// Echo session variables that were set on previous page
echo  $childData["ADHDT"];?></h5>

<h5>Parents name: <?php
// Echo session variables that were set on previous page
echo  $childData["CaregiverName"];?></h5>

<h5>Parents email: <?php
// Echo session variables that were set on previous page
echo  $childData["CaregiverEmail"];?></h5>
<br>


<a href="#Performance-data" style="color: black; background-color:white; width: 25%; border-radius: 1px; padding: 11px; border: 1px solid white;">Go To Child Performance Data >></a>
</div>



<form action='' method='POST'>
<button class="delete-button"  name='delete' onclick="return confirm('Are you sure you want to delete this child?')" style="top: 25.2%; left:5%;" >Delete child</button>
</form>
<a href=editform.php?childID=<?php echo $childID?> class="edit-button" style="margin:10%;
top: 69%;
left: 44%;">Edit child information</a>
</div>

<div id="Performance-data" >

<div class="key-concepts" style="margin:13%; margin-bottom:1%;">
<button class="key-button" style="left:30%;position: relative;">Performance data description</button>

<div class="keys">
  <p> Session date: It explains the date the session for the supervised mode was started.<br><br>
      Start time session: Explains  when the session supervised mode started.<br><br>
      End time session: Explains  when the session supervised mode end.<br><br>
      Task name: represents the task name that the child play with.<br><br>
      Level number: represents the level number achieved by the child.<br><br>
      Try number: represents the try number in the level.<br><br>
      Given time for try: represents the time given for each try.<br><br>
      Time is taken for try: represents the time that the child took to achieve the goal.<br><br>
      Successful try: represents if the try is successful or not.<br><br>
      Num of  correct placement: represents the number of correct placement based on a story in the picture sequence task.<br><br>
</P>
</div>
</div>

<?php
              
            $childID = clearData($_GET['childID']);

            $result = $conn->query('SELECT * FROM child  WHERE childID= $childID ');

            if ($result = $conn -> query("SELECT * FROM chart_v WHERE childID= $childID")) {
            
            if($result->num_rows == 0){?>

              <form method="GET" action="viewchildinfo.php" style="margin-right:56%;">
              <a href=performance.php?childID=<?php echo $childID?> class="dbutton0" style="pointer-events:none; background-color: rgba(192, 46, 10, 0.438); color:#eee; width: 51%; top: 180%;  border-radius: 1px; padding: 10px 30px 10px 60px; border: none;  display: inline-block; margin-left:270px; margin-bottom:8px;  position: relative;">Download Child Performance Data</a>
              
              </form>
              <form method="GET" action="viewchildinfo.php?childID=<?php $childID?>"style="margin-right:56%;">
              <a href=questionnare.php?childID=<?php echo $childID?> class="dbutton0" style="pointer-events:none; background-color: rgba(192, 46, 10, 0.438); color:#eee; width: 51%; top: 175%;  border-radius: 1px; padding: 10px 30px 10px 60px; border: none; display: inline-block;  margin-left:270px; position: relative;">Download NICHQ Data Questionnaire</a>
              
              </form>
              <?php }
            else { ?>

                <form method="GET" action="viewchildinfo.php" style="margin-right:56%;">
                <a href=performance.php?childID=<?php echo $childID?> class="dbutton" style="background-color: #5cb85c; width: 51%; top: 180%;  border-radius: 1px; padding: 10px 30px; border: none;  position: relative; ">Download Child Performance Data</a>
                </form>
                <form method="GET" action="viewchildinfo.php?childID=<?php $childID?>"style="margin-right:56%;">
                <a href=questionnare.php?childID=<?php echo $childID?> class="dbutton" style="background-color: #5cb85c; width: 51%; top: 180%;  border-radius: 1px; padding: 10px 30px; border: none;  position: relative; ">Download NICHQ Data Questionnaire</a>
                
                </form>

              <?php }
            

            }
              else header("Location: PhPanel.php");

              }
            ?>


<div class="accordion-content"> 
<h2>For Which Task Do You Want To View Graph?</h2>

<button class="accordion">Card Matching Task</button>
<div class="panel">

        <div class="column">


        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=1&levelNum=1>Level 1</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=1&levelNum=2>Level 2</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=1&levelNum=3>Level 3</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=1&levelNum=4>Level 4</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=1&levelNum=5>Level 5</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=1&levelNum=6>Level 6</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=1&levelNum=7>Level 7</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=1&levelNum=8>Level 8</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=1&levelNum=9>Level 9</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=1&levelNum=10>Level 10</a>
        

          
          
        </div>
</div>

<button class="accordion">Object Detecting Task</button>
<div class="panel">
<div class="column">
          
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=2&levelNum=1>Level 1</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=2&levelNum=2>Level 2</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=2&levelNum=3>Level 3</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=2&levelNum=4>Level 4</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=2&levelNum=5>Level 5</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=2&levelNum=6>Level 6</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=2&levelNum=7>Level 7</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=2&levelNum=8>Level 8</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=2&levelNum=9>Level 9</a>
        <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=2&levelNum=10>Level 10</a>
        </div>
</div>

<button class="accordion">Picture Sequenceing Task</button>
<div class="panel">
<div class="column">
          
       <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=3&levelNum=1>Level 1</a>
       <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=3&levelNum=2>Level 2</a>
       <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=3&levelNum=3>Level 3</a>
       <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=3&levelNum=4>Level 4</a>
       <a href=newchart.php?childID=<?php echo $_GET['childID']?>&taskID=3&levelNum=5>Level 5</a>
        </div>
</div>


</div>

</div>



<script>
function confiremFunction() {
  let confirmresult= confirm("Are you sure you want to delete this child?");
if (confirmresult) {
    <?php if(isset($_POST['delete'])){

    $deleteresult = $conn->query('DELETE FROM child  WHERE childID= $childID ');

  if ($deleteresult = $conn -> query("DELETE FROM child WHERE childID= $childID")) {
    echo "Record deleted successfully";
    header("Location: childrenlist.php");
  } else {
    echo "Error deleting record: " . $conn->error;
  }

  $conn -> close();
  
  
  
   }?>

}

}
</script>






<?php require_once('inc/footer.html.php'); ?>