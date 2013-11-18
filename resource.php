<?php
include_once 'includes/connection.php'; 
$query = mysql_query("SELECT * FROM resource ORDER BY upload_date DESC");
?>
<style>
    .reso{
        padding: 5px;
        margin-bottom: 5px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        border-bottom-left-radius: 10px; 
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
</style>


<div class="row-fluid" style="font-size: 0.8em;font-style: italic">
    <h1><img src="img/resource.png"> </i> </h1>
    <div class="row-fluid inner-div">
    <?php 
    while ($row = mysql_fetch_array($query)) {
      ?>
    <div class="row-fluid reso">
       <a href="#"> <i class="icon-file-text-alt"></i> <?php echo $row['title'] ?>
        </a>
    </div>
       <?php
    }
    ?>
       </div>
    </div>

<script>
$(function(){
    $('.inner-div').slimScroll({
        height: '200px'
    });
});
</script>