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
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="all" />
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
        <div style="padding-top: 20px;" class="container">
            <div class="span1"></div>
        <div class="span12">
        <div class="row-fluid visible-desktop">
            <header>
                <div class="row-fluid">
                    <div class="span3">
                        <img src="img/logoo.png" style="" class="visible-desktop visible-tablet pull-left">
                    </div>
                    <div class="span6 text-center text-info" style="padding-top: 20px">
                        <img src="img/log1.png" style="" class="img-rounded">
                       <!--<h3>Health Information System Program</h3>-->
<!--                            <form class="navbar-form form-search pull-right">
                            <style>
                            .ui-autocomplete-loading {
                                   background: white url('img/ui-anim_basic_16x16.gif') right center no-repeat;
                           }
                           </style>
                                   <div class="input-append">
                                     <input type="text" class=" search-query" placeholder="Search" id="searchpeople" name="querystring">
                                     <button type="submit" class="btn btn-primary" title="search" id="search-submit"><i class="icon-search icon-white"></i></button>
                                   </div>
                         </form>-->
                    </div>
                    <div class="span3" style="background-color:">
                        <img src="img/udsm.png" style="" class="visible-desktop visible-tablet pull-right">
                    </div>
                </div> 
		
            </header>  
        </div>
        <div class="row-fluid contentia" style="padding-top: 20px;border-radius: 18px">
            
            <div class="span12">
                
            
        <?php
        include 'top.php';
        ?>
            <div class="row-fluid ">
                <div class="span9">
                    <div class="bs-docs-example lead text-left" style="font-size: 17px;line-height: 27px">
                        <p>
                            The Health Information System Programme (HISP) is a global south-south-north collaborative network aiming to improve health care in developing countries through research on and implementation of Health Information Systems. The network has since 1994 been involved in many countries in the "Global South", and at the global level is coordinated by the Global Infrastructures Research Group at Department of Informatics, University of Oslo.
                            
                        </p>
                        <p>
                            In Tanzania, HISP is located and coordinated within Department of Computer Science and Engineering of the University of Dar-es-salaam (UDSM) since 2002. The HISP Tanzania works closely in collaboration with the Tanzania Ministry of Health and Social Welfare (MoHSW) and other various local and international partners. Our aims are to support the Government of Tanzania to design, develop and implement sustainable health information systems through application of best approaches and use of flexible and open ended technologies for efficient health data collection, processing, and use of information for action. At the core of the HISP Tanzania is the development and implementation of the open source DHIS2 software and the use of this application to strengthen the health information system in Tanzania. (Visit the DHIS web site for more on the software: www.Dhis2.org.
                        </p>
                        <a href="#"> >> more >></a>
                      </div>
                    
                </div>
                <div class="span3"  style="padding-right: 20px">
                    
                    <?php include 'newslide.php'; ?>
                    <?php include 'resource.php'; ?>
                </div>
            </div>
                <div class="row-fluid">
                    <div class="span12">
                     <section id="scn">
                        <!--<h3 class="title"><span>WELCOME TO EXPERIENCE TANZANIA!</span></h3>-->
                        <div class="row">
                            <div class="span1"></div>
                                <div class="span3">
                                <!--<h1 class="text-left"><img src="img/team.png"> </i> </h1>-->
                                
                                <?php include 'team.php'; ?>
                                </div>
                                <div class="span4">
                                <div class="seperator">
                                    <!--<h1 class="text-center"><img src="img/project.png"> </h1>-->		
                                    <img src="img/project.png" style="" class="img-round">		
                                        <ul class="nav nav-list text-left" >
                                            <li class="text-center">
                                                <a href="#" style="color: #0c0a0a">DHIS - District Health Information System<br> <img src="img/dhis.png" style="height: 100px;width: 250px " class="img-circle" />
                                                    
                                                </a>
                                            </li>
                                            
                                            <li class="text-center">
                                                <a href="#" style="color: #0c0a0a">HRHIS - Human Resource for Health Information System<br> <img src="img/hrhis.png" style="height: 100px;width: 250px " class="img-circle" />
                                                    
                                                </a>
                                            </li>
                                            
                                        </ul>
                                </div>
                                </div>
                            <div class="span3">
                                <img src="img/find.png" style="" class="img-rounded">
                                <address style="font-size: 0.9em" class="text-left">
                                    <strong> The Coordinator </strong><br>
                                    HISP<br>
                                    Department of Computer Science and Engineering<br>
                                    Ground Floor, Science Workshop Building <br>
                                    P.O BOX 35062 Dar es Salaam<br>
                                    TANZANIA - EAST AFRICA<br>
                                    <abbr title="Phone">P:</abbr> +255-22-2410500/9<br> 
                                    <abbr title="Mobile"><i class="icon-phone"></i>:</abbr> +255 784 147946 <br>

                                    <a href="mailto: coordinator@hisptanzania.or.tz"> coordinator@hisptanzania.or.tz</a>
                                  </address>
                            </div>
                               
                        </div>
                        </section>

                    </div>
                    
                </div>
        
            <?php
        include 'patners.php';
        
        ?>
                </div>
            
        </div>
 <?php include 'footer.php'; ?>
            </div>
            <div class="span2"></div>
            </div>
    </body>
</html>
