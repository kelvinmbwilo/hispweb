<!DOCTYPE html>
<html>
    <title>HISP Tanzania</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <!--<link rel="stylesheet" type="text/css" href="css/fdw-demo.css" media="all" />-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min1.css" media="all" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" media="all" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Wire+One&v1' rel='stylesheet' type='text/css' />
    <!-- jQuery lib from google server ===================== -->
    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="jqueryui/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery-tweetscroll.js"></script> <!-- jQuery tweetscroll plugin -->
    <script src="js/caroufredsel-carousel.js"></script><!-- CarouFredSel carousel plugin -->
<!--  javaScript -->
<script>  
<!--  // building select nav for mobile width only -->
$(function(){
	// building select menu
	$('<select />').appendTo('nav');

	// building an option for select menu
	$('<option />', {
		'selected': 'selected',
		'value' : '',
		'text': 'Choise Page...'
	}).appendTo('nav select');

	$('nav ul li a').each(function(){
		var target = $(this);

		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('nav select');

	});

	// on clicking on link
	$('nav select').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});

// show and hide sub menu
$(function(){
	$('nav ul li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(150);
		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(150);			
		}
	);
});
//end
</script>
<!-- end -->
</head>
    <body>
<!--        <section id="bannerSection" style="background:url(img/portfolio.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle"> <small> :<img src="img/log1.png" style="height: 90px" class="img-rounded"></small> 
		<span class="pull-right toolTipgroup">
			<a href="#" data-placement="top" data-original-title="Find us on via facebook"><img style="width: 95px"  src="img/logoo.png" alt="facebook" title="facebook"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via youtube"><img  style="width: 95px" src="img/udsm.png" alt="youtube" title="youtube"></a>
		</span>
		</h1>
	</div>
</section>-->
        <div style="padding-top: 20px;" class="container">
         
        <?php
        include 'top1.php';
        ?>
            <div class="row-fluid ">
                <div class="span9">
                    <div class="bs-docs-example1 lead text-left" style="font-size: 17px;line-height: 27px">
                        <h3  class="text-warning text-center">Vision</h3>
                        <p>
                           Development and implementation of sustainable and integrated computer based health information systems in Tanzania that empower communities, health workers and decision makers to improve the coverage, quality and efficiency of health services.
                        </p>
                        <h3 class="text-warning text-center">Mission</h3><p>
                       To adopt a broad based developmental approach to capacity building and support of communities, health care workers and decision makers for improving health information systems and use of information for action.</p><p>
                         </p>
                         <p>In partnership with MOHSW and various implementing partners, we encourage and support:</p>
                         <ul style="list-style: disc">
                             <li>Flexible standards and integration of health management information systems.</li>
                             <li>Development and nurturing strong information culture at all level of the health system</li>
                             <li>Advocate use of free and open source software to support information processing</li>
                             <li>Support and promote participatory approaches in the health information systems reform process.</li>
                             <li>Promote human resources development as a key to sustainable health information system.</li>
                             <li>Encourage and promote local and international partnership as a pipeline for synergies.</li>
                             
                         </ul>
                    </div>
                    
                </div>
                <div class="span3"  style="padding-right: 20px">
                    
                    <?php include 'right.php'; ?>
                    
                </div>
            </div>
                
            <?php
       // include 'patners.php';
        
        ?>
            
        </div>
 <?php include 'footer.php'; ?>
            </div>
    </body>
</html>
