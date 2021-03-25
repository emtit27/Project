<?php
ob_start();
session_start();
require_once('inc/config.php');
require_once('inc/func.php');
if (isset($_GET['log']) && $_GET['log'] == 'out'){
  
   user_data(false);
  header("Location: index.php");
  exit();
}

if (user_data() == false ){

  if (pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) != "index"){

    header("Location: index.php");
    exit();
  }
  }else{
  if (pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) == "index"){
    
    header("Location: phPanel.php");
    exit();
  }
}

?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
  

<link rel="stylesheet" href="css/publicStyle.css">

<?php
// اذا كان يوجد ملف ستايل خاص بالصفحة سيتم تضمينه 
$currentPageName    = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
$cssForCurrentPage  ='css/' . $currentPageName . '.css';
 if (is_file($cssForCurrentPage))
        echo '<link rel="stylesheet" href="'.$cssForCurrentPage.'">'; 
?>

<head>

  <!-- add icon link -->
  <link rel = "icon" type="image/png" href="img/icon3.png">

  <title> Fly To Focus</title>

</head>

<body>
<!-- Navigation -->
<nav class="ER-bar ER-black">
  <div class="icon">
    <img src="img/icon1.png">
  </div>
<h2 class="tit">Fly To Focus</h2>

<!--Sign up-->
<?php if (user_data() == false){ ?>
<button class="test" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>


<button class="test"onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>
<?php }else{ ?>
<span style="font-size:30px;cursor:pointer;float:right; padding-right: 40px;" onclick="openNav()">&#9776; </span>

<button class="test" onclick="location.href='?log=out';" style="width:auto;">Logout</button>
<?php } ?>
</nav>
<?php if (user_data() != false){ ?>
<!-- Navigation -->
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="phPanel.php">My Page</a>
    <a href="addChild.php">Add New Child</a>
    <a href="childrenlist.php">View Child Information</a>
    <a href="aboutUs.php">About Fly To Focus Team</a>
  </div>
</div>
<?php }?>
