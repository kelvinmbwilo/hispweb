<?php
include_once 'includes/connection.php'; 
$query = mysql_query("SELECT * FROM news_event ORDER BY added_time DESC LIMIT 5");
?>
<hr />
<div class="freshdesignweb row-fluid">
                <article class="grid_3  carousel-article text-center">
                    <img src="img/news.png" style="" class="img-rounded">
                    <!--<button type="button" class="btn btn-mini btn-primary pull-right"><i class="icon-th-list"></i> View All</button>-->

                    <div style="" class="caroufredsel_wrapper">
                    <ul style="text-align: left; float: none;" id="foo3" class="carousel-li">

                     <?php
                     while ($row = mysql_fetch_array($query)) {
                         ?>
                        <li class="text-right"  >
                            <strong ><a href="#"><?php echo $row['title'] ?></a></strong>
                        <p style="font:13px Arial, tahoma, sans-serif;color: #8f8f8f">
                            <?php if($row['image'] == ""){
                                
                            }  else {
                              ?>
                            <img src="uploads/news/<?php echo $row['image'] ?>" style="height: 70px;width: 70px;padding-left: 3px" class="img-rounded pull-right">
                              <?php
                            }
                            ?>
                        <?php echo $row['discr'] ?> 
                        </p>
                        </li>
                         <?php  
                        } 
                        ?></ul></div>

                    <div class="clearfix"></div>

                    <div style="display: block;" class="carousel-pagination" id="foo3_pag"><a class="selected" href="#"><span>1</span></a><a class="" href="#"><span>2</span></a><a class="" href="#"><span>3</span></a></div>

                </article><!-- slider text article end -->
                

        <script>
            $("#foo3").carouFredSel({
                items: 1,
                auto: true,
                scroll: 1,
                pagination  : "#foo3_pag"
            });
        </script>
</div> 
<div class="row-fluid">

</div>