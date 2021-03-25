<?php require_once('inc/header.html.php'); ?>

<div class="topnav">
        <a href="viewchildinfo.php?childID=<?php echo clearData($_GET['childID'])?>">Back</a>
      </div>

    <?php


// define variables and set to empty values

$chname = $pname = $pemail = $ADHDT = $gender = $Age = $query = $chname_err= "";
?>

<div class="center">
  <br>
  <br>

   <div class="container">
   <form id="form" action="" method="POST" >
    
   <fieldset>
  <br>
   <legend><em><h4>Please enter the child information :</h4></em></legend>
  <br>
    
        
  <br>
  <br>

  &emsp;&emsp;<label for="pname">Parent Name<span class="error">*</span></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="pname" name="pname" pattern="[A-Za-z]+" title="English lettres only, no punctuation, numbers or special characters"  placeholder="Please enter parent name" minlength="3"  maxlength="12" value="<?php echo $pname;?>"  required>
        <span id="pname_err"></span>
        <br>
        <br>
        &emsp;&emsp;<label for="pemail">Parent Email<span class="error">*</span></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="email" id="email" name="pemail" placeholder="Please enter parent email" minlength="12"  maxlength="30" value="<?php echo $pemail;?>"  required >
        <span id="pemail_err"></span>
        <br>
        <br>

       &emsp;&emsp;Child gender:<span class="error">* </span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
       &emsp;&emsp;&emsp;&emsp;<input type="radio" id="Male" name="gender" required <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">
      <label for="Male">Male</label><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      &emsp;&emsp;&emsp;&emsp;<input type="radio" id="Female" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">
      <label for="Female">Female</label>
      <br>
      <br>
      <br>

      &emsp;&emsp;<label for="ADHD Type">ADHD Type <span class="error">* </span></label>
      &emsp;&emsp;<select id="ADHDT" name="ADHDT" required>
        
          <option value="" > Please select one of them </option>
          <option value="Inattentive"> Inattentive</option>
          <option value="Combined" > Combined</option>
          <option value="Hyperactive/Impulsive" > Hyperactive/Impulsive</option>
        </select>
        <br>
<br>


      &emsp;&emsp;<label for="age">Age (between 6 and 9):<span class="error">*</span></label>
      <input type="number" id="age" name="age" min="6" max="9" value="<?php echo $Age; ?>" required >

      <br>
      <br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" name="edit" value="Update information" >

  </fieldset>
  </form>
  </div>
  </div>

  
    <?php 

    if(isset($_POST['edit'])){

      if(isset($_POST['pemail']) && $_POST['pemail']!= '' )
      {
          if(filter_var($_POST['pemail'], FILTER_VALIDATE_EMAIL ))
          {

    
                $chname  = clearData($_POST['chname']);
                $pname   = clearData($_POST['pname']);
                $pemail  = clearData($_POST['pemail']);
                $ADHDT   = clearData($_POST['ADHDT']);
                $gender  = clearData($_POST['gender']);
                $Age     = clearData($_POST['age']);
            

                if( isset($_GET['childID']) && is_numeric($_GET['childID']) ){

                $childID = clearData($_GET['childID']);
                    

                $result = "UPDATE child SET  CaregiverName= '$pname', CaregiverEmail= '$pemail', ADHDT= '$ADHDT', gender= '$gender', age ='$Age' WHERE childID= '$childID' ";
            
                if ($conn->query($result) === TRUE){
    
                echo '<script type="text/javascript"> alert (" The child information has been updated ")</script>';
                
              }
              else {
                echo '<script type="text/javascript"> alert (" The child information has been NOT updated !!")</script>';
                
              }
              
              $conn -> close();
            
            }
          }
   
          }
        }
           
        ?>



  
  <?php require_once('inc/footer.html.php'); ?>