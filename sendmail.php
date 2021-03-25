<?php require_once('inc/header.html.php'); ?>

<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

// define variables and set to empty values

    $encpt_password = $chname = $chpass = $pname = $pemail = $ADHDT = $gender = $Age = $sub= $message = "";
    $chname_err = $pemail_err = $pname_err="";

// create function for generate random password

    function generate_password($len = 8){
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr( str_shuffle( $chars ), 0, $len );
    return $password;
        }
// Output: Your password is: 4GQnHTN8 mysqli_query($conn, "insert into registration (name, email, password) values ('$name', '$email', '$encpt_password')");
//echo "Your Password Is : ".$password;
    
    
    if(isset($_POST['Add'])){

        if(isset($_POST['pemail']) && $_POST['pemail']!= '' ){

                if(filter_var($_POST['pemail'], FILTER_VALIDATE_EMAIL )){
    
                    $chname         = clearData($_POST['chname']);
                    $chpass         = generate_password();
                    $encpt_password = sha1($chpass);
                    $pname          = clearData($_POST['pname']);
                    $pemail         = clearData($_POST['pemail']);
                    $ADHDT          = clearData($_POST['ADHDT']);
                    $gender         = clearData($_POST['gender']);
                    $Age            = clearData($_POST['age']);
                    
            
                /* $pemail='group9.gp@gmail.com';
                $sub='test!';
                $message='here i am';*/

            if(empty($_POST["chname"])){

        $chname_err .= '<p><label id="status.error">Please Enter Correct Child Name</label></p>';

        }else{

        if(!preg_match("/^[a-zA-Z ]*$/",$chname)){

        $chname_err .= '<p><label id="status.error">Only letters and white space allowed</label></p>';

        }else{
            $chname_err .= '<p><label id="status.success">Valid input </label></p>';

          }
        } 
        if(empty($_POST["pname"])){

        $pname_err .= '<p><label id="status.error">Please Enter Parent Name</label></p>';

        }else{

        if(!preg_match("/^[a-zA-Z ]*$/",$pname))
        {
        $pname_err .= '<p><label id="status.error">Only letters and white space allowed</label></p>';

        }else{
            $pname_err .= '<p><label id="status.success">Valid input</label></p>';
        }

            }
        if(empty($_POST["email"])){

        $pemail_err .= '<p><label id="status.error">Please Enter Parent Email</label></p>';

            }else{
       
        if(!filter_var($pemail, FILTER_VALIDATE_EMAIL))
                    {
        $pemail_err .= '<p><label id="status.error">Invalid email format</label></p>';
                    }

        else{
            $pemail_err .= '<p><label id="status.success">Valid input</label></p>';
            
                    }
                }
        }
    
        // check if name is taken already
        $result = $conn->query( "SELECT * from child WHERE childUsername = '$chname'");
        if ($result->num_rows > 0) {
            
            echo '<script type="text/javascript"> alert (" Error, the Username is taken, try another name. ")</script>';
        }else{
                   
            $physicianID=user_data("physicianID");
            $result = $conn->query("INSERT INTO child (childUsername, CaregiverName, CaregiverEmail , ADHDT , gender , age , pass , physicianID )
                    VALUES ('$chname','$pname', '$pemail',  '$ADHDT', '$gender', '$Age' , '$encpt_password' , '$physicianID')");
        
        if($result){
            
            echo '<script type="text/javascript"> alert (" THANKS , THE CHILD HAS BEEN ADDED SUCCESSFULY ")</script>';
            
            $sub='Wlcome to fly to focus world !';
            $message='Hello, this is your child name('.$chname.') , use this password ('.$chpass.') to get into the FLY TO FOCUS system ♥ !';
            $headers = array('From: group9.gp@gmail.com',
        
                    'X-Mailer: PHP/' . PHP_VERSION);
                    $headers = implode("\r\n", $headers);
    
                    $mail= mail($pemail, $sub, $message, $headers);
    
                    //$success = @mail($pemail, $sub, $message, $headers);
                        
            
    
                        if($mail){
                           
                            echo '<script type="text/javascript"> alert ("Congrats ♥ !! The email have been send successfully ")</script>';
                            echo "<script>location.href= 'PhPanel.php'</script>";
                            
                            
                            }
                            else{
                                
                            echo '<script type="text/javascript"> alert (" ERROR!! ,Mail sending failed. ")</script>' ; 
                            echo "<script>location.href= 'PhPanel.php'</script>";
                            }
            }
            else {
                echo 'Ops!! Data Not Saved';
            }
        }

        

        }
        
        
    }
                        
                          

?>


<?php require_once('inc/footer.html.php'); ?>
