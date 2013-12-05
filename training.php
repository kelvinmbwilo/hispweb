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
                        <h3  class="text-warning text-center">Continuous Training and Education for Project Sustainability</h3>
                        <p>
                           Sustainability will depend upon the building of solid capacity in information management, analysis and use at district, regional and national level. For this reason there is a need to design different training modules that will suit different cadres withing the existing health sector management at all levels
                        </p>
                        <h3 class="text-warning text-left"> Short Term/ In-service Training</h3>
                        <p>
                       The HISP project team conducts a training program on the management, analysis and use of information for district and regional health management teams.
                        </p>
                        <ol style="list-style: decimal">
                            <li>
                                One week training is given once for all Regional Health Management Team, then one week training for district staff which will be repeated (with assignments to be delivered) after about 9-12 months.
                            </li>
                            <li>
                               Training of facility level staff will be made an important part of the training scheme, but because of the costs involved, appropriate approaches are developed in the Test region before detailed planning can be done. 
                            </li>
                            <li>
                                Establish and institutionalize bi-annual data use workshops at all levels where data is analyzed and discussed, problems identified (both regarding HMIS and health services), and action decided upon. The key instrument is to support bi-annual data use workshops in all regions for district staff throughout the project (starting after the training in data analysis and use)
                            </li>
                            <li>
                               District based data use workshops for facility staff will be made mandatory part of the annual planning process in each district. Included in this capacity building and systems strengthening is to institutionalize the production and dissemination of quality district and regional quarterly and annual reports based on HMIS data. Important in this effort is to strengthen the district and regional information 'Office' and DHIS data warehouse as an active and competent information resource centre that is effectively responding to the needs of the district /region: Create District Information Towers 
                            </li>
                        </ol>
                        <h3 class="text-warning text-left">Masters in Health Informatics</h3>
                        <p>
                        The Computer Science Unit with funding assistance from NORAD in collaboration with Olso University together with Muhimbili School of Public Health and Social Sciences, is providing a two years MSc course in Health Informatics. The course is meant for students with Informatics and Medical/Health background who are working in health sector. The course has been designed to be provided as an evening program so as to allow students to study while continuing with the jobs.
</p><p>
Currently, there are major changes taking place in the Tanzanian Economy in general and health sector reforms in particular. The University of Dar es salaam through the Computer Science Unit has a role to play in these changes by equipping people with the necessary integrated ICT and public health skills to cope with and manage the changes. The proposed Masters in Health Informatics program is one of the avenues for the Department of Computer Science and School of Public Health to discharge this role. This will also strengthen the relationship between the University of Dar es salaam and Tanzanian community at large.
</p><p>
The Course aimed at produce Public Health Informaticians who will play a role of Information and Health Data Management and different levels of the Health Sector in the course of institutionalization information usage for decision making and planning so as to improve the quality of health delivery.
                </p>
                
                <h3 class="text-warning text-left">One year Diploma course in Health Informatics</h3>
                <p>
                    Currently the Computer Science Unit in collaboration with the Ministry of Health and Social Welfare - Department of Continue Education, is in the process of developing a one year diploma course in Health Informatics targeting district and regional staff. The planned diploma course will incorporate the HMIS training provided for the regional and district health workers, health managers, and specific health programmes coordinators. The Diploma course is expected to start in 2010/2011 academic year.
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
