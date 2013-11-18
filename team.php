<?php
include_once 'includes/connection.php'; 
$query = mysql_query("SELECT * FROM team");

?>
<h4>Who we are?</h4>	
<div class="row-fluid inner-div1">
    <?php 
    while ($row = mysql_fetch_array($query)) {
      ?>
    <div class="row-fluid reso">
        <img src="uploads/team/<?php echo $row['image'] ?>" class="img-rounded pull-left" style="height: 70px;width: 70px;padding-right: 8px" >
        <a href="#" style="color: #3e2626">
           <?php echo$row['titl'].". ". $row['fname']." ".$row['mname']. " ".$row['lname'] ?>
        </a>
        <p style="padding-top: 20px"><?php echo $row['project_title'] ?></p>
    </div>
       <?php
    }
    ?>
       </div>
<script>
$(function(){
    $('.inner-div1').slimScroll({
        height: '300px'
    });
});
</script>
