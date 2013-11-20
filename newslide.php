<?php
include_once 'includes/connection.php'; 
$query = mysql_query("SELECT * FROM news_event ORDER BY added_time DESC LIMIT 5");
$query1 = mysql_query("SELECT * FROM news_event ORDER BY added_time DESC LIMIT 5");
?>
<img src="img/news.png" style="" class="img-rounded">
<div id="myCarousel1" class="carousel slide" >
  
  <!-- Carousel items -->
  <div class="carousel-inner">
      <?php
       $k = 0;
      while ($row = mysql_fetch_array($query)) { 
         if($k == 0 ){
             echo "<div class='active item'>";
             ?>
      <h4 style="color: #003399"><?php echo $row['title'] ?></h4>
      <p style="font-family: 'August Sans'; font-weight: 200;color: #000000"><?php echo $row['discr'] ?></p>
      <?php
             echo "</div>";
             $k++;
         }
           else {
             echo "<div class='item'>";
             ?>
      <h4 style="color: #003399"><?php echo $row['title'] ?></h4>
      <p><span  style="font-family: 'August Sans'!important; font-weight: 200;color: #000000;line-height: 27px"><?php echo $row['discr'] ?></span></p>
      <?php
               echo "</div>";
               $k++;
         }
      }
          ?>
    
  </div>
  
<!--   Carousel nav 
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>-->
</div>
<script>
    $(document).ready(function(){
        $('#myCarousel1').carousel({
          interval: 4000
        })
     })

</script>