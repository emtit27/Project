<?php require_once('inc/header.html.php'); ?>




<div class="info-content">

<h1>Physician Information</h1>
<h5>Name: <?php
// Echo session variables that were set on previous page
echo  user_data("phUsername");?></h5>
<h5>Email: <?php
// Echo session variables that were set on previous page
echo  user_data("phEmail");?></h5>

<div class="a-add">
<a href="addChild.php" >Add New Child</a>
</div>

<div class="a-edit">
  <a href="childrenlist.php" >View Child Information</a>
</div>


</div>




<?php require_once('inc/footer.html.php'); ?>