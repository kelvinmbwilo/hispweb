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
                        <h3  class="text-warning text-center">Software development,Systems Integration and Support</h3>
                        <p>
                           The software development and integration a continuous activity and is handled by the UDSM/UiO-MOHSW team. The UDSM/UiO-MOHSW team is responsible to Develop District based National data warehouse. The software development and integration work a continuous activity is handled by the UDSM-MOHSW team. The team is responsible to
                        </p>
                        <ul style="list-style: disc">
                            <li>Design database and software for 'rapid rollout' based on existing, but harmonized, data collection tools.</li>
                            <li>Update software and data warehouse design based on revised tools.</li>
                            <li>Integrate DHIS with other related applications (e.g. LGMD).</li>
                            <li>Revise database & software once new registers & tools finalized.</li>
                        </ul>
                        <p>
                       Integration with other computer based application such as Electronic Patient Record systems in hospitals and other facilities is handled through a standardized data interchange platform. This, of course, is depending on the use of open standards also by other computer applications, which will be ensured through the strategic planning process and other computerized data sources; establishing web-based data warehouse, electronic reporting etc. The basic principle underlying the various software applications involved in this work is that first a first customized, stable and useful application is implemented, and thereafter it is continuously further developed and integrated with the patient record systems such as the Care2X, and other systems in place.
                        </p>
                        <p>The further development of the district, regional and national levels data warehouse include: </p>
                        <ol style="list-style: lower-alpha">
                            <li>
                                ntegrating other systems and data sources; the extraction and inclusion of data from other data sources such as census data and survey data (DHS) in order to provide denominators and "base lines" data. Electronic Patient Records systems in hospitals and facilities will be integrated in such a way that monthly aggregates (reports) are automatically generated and "loaded" into the DHIS. Data may also be exported to other computer based systems, e.g. exporting relevant data collected from facility/ district levels to specific software used by health programs.
                            </li>
                            <li>
                                Include "real time" web based presentation and analytical functionality; Web-based dashboard for quick access to reports, charts and maps; the inclusion of Geographical Information System (GIS, mapping facilities). A current project with WHO concerns the integration of DHIS with the WHO OpenHealth GIS.
                            </li>
                        </ol>
                        <p>
                            The UDSM/UiO software team including the MOHSW is in charge of the further development and improving of the DHIS software and related technical aspects at district and national levels.
                        </p>
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
