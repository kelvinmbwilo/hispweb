<?php
include_once 'includes/connection.php'; 
$query = mysql_query("SELECT * FROM resource ORDER BY upload_date DESC");
?>
<style>
    .reso{
        padding: 5px;
        margin-bottom: 5px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        border-bottom-left-radius: 10px; 
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
</style>


<div class="row-fluid" style="padding-bottom: 8px">
    <img src="img/resource.png" style="" class="img-rounded">
    <div class="row-fluid inner-div">
    <?php 
    while ($row = mysql_fetch_array($query)) {
      ?>
    <div class="row-fluid reso text-left" style="font-size: 1em;">
        <a href="uploads/<?php echo $row['file'] ?>" style='font-family:cursive;font-size: 14px;color: #255;'> <i class="icon-file-text-alt"></i> <?php echo $row['title'] ?>
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