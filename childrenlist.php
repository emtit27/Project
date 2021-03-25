<?php require_once('inc/header.html.php'); ?>
<?php require_once('inc/func.php'); ?>

<div class="topnav">
        <a href="phPanel.php">Back</a>
      </div>



<!-- submit the slected child -->

<div>

</div>

<div class="info-content">
<h1 style="text-align: center;">Children List</h1>

<p style="text-align: center;">Select a child to view his/her information:</p>

    <?php
    $physicianID=user_data("physicianID");
    $result = $conn->query("SELECT childID,childUsername FROM child WHERE physicianID='$physicianID' ");
      ?>


<label for="children"> </label>
<select name="child" id="child" onchange="if (this.value) window.location.href='viewchildinfo.php?childID='+this.value">
<option selected >Choose a name</option>

    <?php
    while($row = $result->fetch_assoc()){
        $childID = $row['childID'];
        $childUsername = $row['childUsername'];
        echo"<option value='$childID'>$childUsername</option>";
    }
        ?>
    
</select>




</div>





<?php require_once('inc/footer.html.php'); ?>