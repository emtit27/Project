<?php require_once('inc/header.html.php'); ?>

<div>
      
  <?php

    //Get sign up values pass  

    if(isset($_POST['create_user'])){
      $username   = clearData($_POST['uname']);
      $usermail   = clearData($_POST['email']);
      $userpass   = clearData($_POST['pas1']);
      $userpass2  = clearData($_POST['pas2']);

      // We need to check if the account with that username exists.
      $result = $conn->query("SELECT * FROM physician WHERE phUsername= '$username' OR phEmail= '$usermail' ");

      if ($result = $conn->query("SELECT * FROM physician WHERE phUsername= '$username' OR phEmail= '$usermail'")) {
        
        if($_POST['pas1'] !== $_POST['pas2']){
          echo "<script> alert('Password Do not Match!')</script>";
        
    }else{
          // Store the result so we can check if the account exists in the database.
          if ($result->num_rows > 0) {
            // Username already exists
            echo "<script> alert('Username/Email already exists!')</script>";
          } else {
                  // Insert new account
                  $hashedpassword = sha1($userpass);
                  $result = $conn->query("INSERT INTO physician (phUsername, phPassword, phEmail) VALUES ('$username', '$hashedpassword', '$usermail')");
                  if ($result = true) {
                    
                      echo "<script> alert('You have successfully registered, you can now login!')</script>";
                    }
                  
                    
                  } 
    
          }
      }
      
    }

  ?>

</div>

<div id="id01" class="modal">

  <div class="label">
    <form class="modal-content animate"  method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="img/pngegg.png" alt="Avatar" class="avatar">
      </div>

    <div class="container">
      <h1 style="color: black;">Sign Up</h1>
      <p style="color: black;">Please fill in this form to create an account.</p>
      <hr>

      <label style="color: black;" for="uname"><b>Username</b></label>
      <input type="text"  name="uname" minlength="3" maxlength="12" pattern="[A-Za-z]+" title=" letters in English only, no punctuation, numbers or special characters
" required>

      <label style="color: black;"for= "email"><b>Email</b></label><br>
      <input type="email"  name="email"  required><br>
      <br>
      <div id="message">
  <h4>Password must contain the following:</h4>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
      <label style="color: black;" for="pas1"><b>Password</b></label>
      <input type="password" name="pas1" id="pas1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

      <label style="color: black;" for="pas2"><b>Repeat Password</b></label>
      <input type="password" name="pas2" id="pas2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
      <input type="checkbox" onclick="myFunction1(),myFunction2()">Show Password
      <div id="centerbut">
        <button type="submit" name="create_user">Sign Up</button>
      </div>
    </div>
  </form>
  
  </div>

</div>
</div>

<!-- close Sign up-->

<!-- Long in -->

<div>
  <?php


  //Get log in values pass 

  if(isset($_POST['login_btn'])){
     
   $username = clearData($_POST['username']);
   $userpass = clearData($_POST['pas']);


   if ($res = $conn->query("SELECT * FROM physician WHERE phUsername= '$username' OR phPassword= '$userpass'")) {
      
       if ($res->num_rows > 0) {
         $data = $res->fetch_assoc();
    
        // Account exists, now we verify the password.

         if (sha1($_POST['pas']) === $data['phPassword']) {

         // Verification success! User has logged-in!
          user_data($data);
          header("Location: phPanel.php");
        exit();
          
        }else {
          // Incorrect password 
          echo "<script> alert('Incorrect username and/or password!')</script>";
        }
     
      }
    
      $res->close();
    }
    $conn->close();
  }

  

  ?>
</div>


<div id="id02" class="modal">

  <div class="label">
    <form class="modal-content animate"  method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="img/pngegg.png" alt="Avatar" class="avatar">
      </div>
  
      <div class="container">

        <h1 style="color: black;" style="text-align: center;">Login</h1>
        <p style="color: black;"style="text-align: center;"> Please fill in this form to log in.</p>
        <hr>

        <label style="color: black;" for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
  
        <label style="color: black;" for="pas"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pas" required>
          </div>
          
      <div id="centerbut">
      <div class="container">
        
        <button type="submit" name="login_btn">Login</button>    
      </div>
    </div>  
    </form>
  </div>
  
  </div>
<!--close nav-->
<!--/nav-->

<!-- Slide Show -->
<section style="background: #f3f3f3">
  <img class="Slides" src="img/doctor4.jpeg"
  style="margin-left: 30%; width:40%; padding: 10px; ">
  <img class="Slides" src="img/assessment.jpeg"
  style="margin-left: 30%; width:40%;  padding: 10px;">
  <img class="Slides" src="img/doctor5.jpg"
  style="margin-left: 30%; width:40%;  padding: 10px;" >

<br>
<!-- fly to foucs Description -->
<section class="ER-container ER-center ER-content" style="max-width:600px">
  <h2 class="ER-wide">Fly To Focus World</h2>
  <hr>
  
  <p class="ER-opacity"><i>We love children</i></p>
  <p class="ER-justify"> And we seek to take care of them in many ways,So we designed this site to improve their focus and not have to go to the clinic especially with the COVID19 period</p>
</section>


<?php require_once('inc/footer.html.php'); ?>

