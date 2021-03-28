<?php require_once('inc/header.html.php'); ?>

<div class="topnav">
        <a href="phPanel.php">Back</a>
      </div>
<?php


// define variables and set to empty values

$chname =$chpass = $pname = $pemail = $ADHDT = $gender = $Age = "";
?>

    <div class="center">
<br>
<br>
    
      

    <div class="container">
        <form id="form" action="sendmail.php" method="POST" >
      
        <fieldset>
          <br>
      <legend><em><h4>Please enter the child information :</h4></em></legend>
  
  <h5 style="color:red;"> <em>Note: you can not change the child name later!</em></h5>
  <br>
        &emsp;&emsp;<label for="cname">Child Name<span class="error">*</span></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="cname" name="chname" pattern="[A-Za-z0-9]+" title="English lettres only, no punctuation, numbers or special characters"  placeholder="Please enter child name" minlength="3" maxlength="12"  value="<?php echo $chname;?>"  required >
        <span id="chname_err"></span>
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
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" name="Add" value="Add" >

      </fieldset>
      </form>
    </div>
    <div id="status"></div>
  </div>
    


<?php require_once('inc/footer.html.php'); ?>

