<!DOCTYPE html>
<html>
    <title>Demo Drop Down Responsive Menu with CSS/jQuery</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <!--<link rel="stylesheet" type="text/css" href="css/fdw-demo.css" media="all" />-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="all" />
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
        <div class="row-fluid">
            <header>
                <div class="row-fluid" style="background-image:url(img/boo.png)">
                    <div class="span3">
                        <img src="img/hisp1.png" style="" class="visible-desktop visible-tablet pull-left">
                    </div>
                    <div class="span6">
                       <h4>Health Information System Program</h4>
                            <form class="navbar-form form-search pull-right">
                            <style>
                            .ui-autocomplete-loading {
                                   background: white url('img/ui-anim_basic_16x16.gif') right center no-repeat;
                           }
                           </style>
                                   <div class="input-append">
                                     <input type="text" class=" search-query" placeholder="Search" id="searchpeople" name="querystring">
                                     <button type="submit" class="btn btn-primary" title="search" id="search-submit"><i class="icon-search icon-white"></i></button>
                                   </div>
                         </form>
                    </div>
                    <div class="span3" style="background-color:">
                        <img src="img/udsm1.png" style="" class="visible-desktop visible-tablet pull-right">
                    </div>
                </div> 
		
            </header>  
        </div>
        <div class="row-fluid contentia" style="padding-top: 20px">
            <div class="span1">
                
            </div>
            <div class="span10">
                
            
        <?php
        include 'top.php';
        ?>
            <div class="row-fluid " >
                <div class="span8">
                    <style>
    .contrent{
        background-color: #fff;
        -webkit-background-clip: padding-box;
        -webkit-border-radius: 8px;
         -moz-border-radius: 8px;
          border-radius: 8px;
        padding: 15px;
        margin-bottom: 5px;
        border-bottom: 0px solid rgba(0, 0, 0, 0.2);
        border-bottom-left-radius: 10px; 
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
</style>
                   <div class="contrent">
                       <p>
                       The Health Information System Programme (HISP) is a global south-south-north collaborative network aiming to improve health care in developing countries through research on and implementation of Health Information Systems. The network has since 1994 been involved in many countries in the "Global South", and at the global level is coordinated by the Global Infrastructures Research Group at Department of Informatics, University of Oslo.
                       </p><p>
In Tanzania, HISP is located and coordinated within Department of Computer Science and Engineering of the University of Dar-es-salaam (UDSM) since 2002. The HISP Tanzania works closely in collaboration with the Tanzania Ministry of Health and Social Welfare (MoHSW) and other various local and international partners. Our aims are to support the Government of Tanzania to design, develop and implement sustainable health information systems through application of best approaches and use of flexible and open ended technologies for efficient health data collection, processing, and use of information for action. At the core of the HISP Tanzania is the development and implementation of the open source DHIS2 software and the use of this application to strengthen the health information system in Tanzania. (Visit the DHIS web site for more on the software: www.Dhis2.org.
</p><p>
The majority of activities for HISP Tanzania have been carried out in Pwani Region (a test region). The HISP Tanzania office for DHIS2 software development is located within UDSM Julius Nyerere Mlimani Campus in Dar es Salaam. We also provide technical support to various implementing partners in Tanzania including Clinton Health Access Initiative (CHAI) and Ifakara Health Institute (IHI) to implement and support the DHIS 2 in Mtwara and Lindi regions supported by CHAI and 27 SPD districts funded by IHI. Within the test region (Pwani), HISP Tanzania activities are carried out according to the national MOHSW action plan, as specified in the M&E Strengthening Initiative "Combined Plan" of 26th October, 2010. We have rolled out DHIS2 and new HMIS into Six Regions (Pwani, Dar es Salaam, Dodoma, Lindi, Mtwara and Shinyanga).
                     </p></div>
                </div>
                <div class="span4">
                    <?php include 'right.php'; ?>
                    
                </div>
               
            </div>
                
            <?php
        include 'patners.php';
        
        ?>
                </div>
            <div class="span1">
                
            </div>
        </div>
 <?php include 'footer.php'; ?>
    </body>
</html>
