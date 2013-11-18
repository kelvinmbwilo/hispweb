<div class="container-fluid">
<h4 class="title"><span>Partners</span></h4>
<div id="clients" class="carousel slide">
		<div class="carousel-inner">
		<div class="item">
		<div class="row-fluid" style=" ">
                    <div class="span1"></div>
                    <div class="span2"> <a href="#"> <img src="img/m_health.gif" alt="#" style="height: 70px"/></a></div>
                    <div class="span2"> <a href="#"> <img src="img/jica.jpeg" alt="#" style="height: 70px"/></a></div>
                    <div class="span2"> <a href="#"> <img src="img/oslo.jpeg" alt="#" style="height: 70px" /></a></div>
                   <div class="span2">  <a href="#"> <img src="img/ifakara.jpeg" alt="#" style="height: 70px"/> </a></div>
                   <div class="span2">  <a href="#"><img src="img/muhas.jpeg" alt="#" style="height: 70px;"/></a></div>
		</div>
		</div>
                <div class="item active">
		<div class="row-fluid" style="">
                    <div class="span1"></div>
                    <div class="span2"><a href="#"> <img src="img/ifakara.jpeg" alt="#" style="height: 70px"/> </a></div>
                    <div class="span2"><a href="#"><img src="img/norway.gif" alt="#" style="height: 70px" ></a></div>
                    <div class="span2"><a href="#"><img src="img/muhas.jpeg" alt="#" style="height: 70px;" /></a></div>
                    <div class="span2"><a href="#"> <img src="img/oslo.jpeg" alt="#" style="height: 70px"/></a></div>
                    <div class="span2"><a href="#"> <img src="img/ifakara.jpeg" alt="#" style="height: 70px" /> </a></div>
		</div>
		</div>
</div>
	<a class="left carousel-control" href="#clients" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#clients" data-slide="next">›</a>
</div>
        </div>
        <script type="text/javascript">
                $(function() {
                    $('#clients').carousel({
                    interval: 6000
                  });
                $(".carousel-inner .span2 a").hover(function(){
                  $(this).find("img").css("height","80px");
                },function(){
                  $(this).find("img").css("height","70px");
                });
                });
        </script>
