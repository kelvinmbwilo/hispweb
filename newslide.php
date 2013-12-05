<?php
include_once 'includes/connection.php'; 
$query = mysql_query("SELECT * FROM news_event ORDER BY added_time DESC LIMIT 5");
$query1 = mysql_query("SELECT * FROM news_event ORDER BY added_time DESC LIMIT 5");
?>
<style>
   
</style>
<img src="img/news.png" style="" class="img-rounded">
<div id="myCarousel1" class="carousel slide" style="font-family:cursive; line-height:22px ;color:#255;text-shadow: 0.5px 0.5px #000000;">
  
  <!-- Carousel items -->
  <div class="carousel-inner" style="max-height: 150px">
      <?php
       $k = 0;
      while ($row = mysql_fetch_array($query)) { 
         if($k == 0 ){
             echo "<div class='active item'>";
             ?>
      <h4 style="color: #003399"><a href="#" id="<?php $row['id'] ?>" class="viewnews"><?php echo $row['title'] ?></a></h4>
     
      <p id="discr" style="color:#255"><?php echo ($row['image']=="")?"":"<img src='uploads/news/{$row['image']}' style='height:60px;width:60px; padding-right:2px' class='pull-left img-rounded'>"; echo $row['discr'] ?></p>
      <?php
             echo "</div>";
             $k++;
         }
           else {
             echo "<div class='item'>";
             ?>
      <h4 style="color: #003399"><a href="#" id="<?php $row['id'] ?>" class="viewnews"><?php echo $row['title'] ?></a></h4>
      <p id="discr" style="color:#255"><?php echo ($row['image']=="")?"":"<img src='uploads/news/{$row['image']}' style='height:60px;width:60px; padding-right:2px' class='pull-left img-rounded'>"; echo $row['discr'] ?></p>
      <?php
               echo "</div>";
               $k++;
         }
      }
          ?>
    
  </div>
  <a href="news.php" class="btn btn-mini btn-info pull-right" style="padding-top: 5px;">All News</a>
<!--   Carousel nav 
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>-->
</div>

<script>
    $(document).ready(function(){
        $('#myCarousel1').carousel({
          interval: 4000
        });
    
    $(".viewnews").click(function(){
         
        var modal = "";
                modal +="<div id='addUser' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='false'>";
                modal += "<div class='modal-header'>";
                modal += "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>";
                modal += "<h3>"+$(this).text()+"</h3>";
                modal += "</div>";
                modal += "<div class='modal-body lead'>"+$(this).parent().parent().find("p").html()+$(this).parent().parent().find("p").text();
                modal += "</div>";
                $("body").append(modal);
                $('#addUser').modal("show");
                
                $("#close").click(function(){
                    $('#addUser').modal("hide");
                })
                $('#addUser').on('hidden', function () {
                    $('#addUser').remove();
                });
              
});
     });

</script>
