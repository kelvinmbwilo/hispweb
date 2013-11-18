<!DOCTYPE html>
<html>
    <title>Demo Drop Down Responsive Menu with CSS/jQuery</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../css/demo.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />
    <!--<link rel="stylesheet" type="text/css" href="css/fdw-demo.css" media="all" />-->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../jqueryui/css/start/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" type="text/css" href="../DataTables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../DataTables/media/css/jquery.dataTables_themeroller.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Wire+One&v1' rel='stylesheet' type='text/css' />
    

</head>
    <body>
        <div class="row-fluid">
            <header>
                <div class="row-fluid" style="background-image:url(img/boo.png)">
                    <div class="span3">
                        <img src="../img/hisp1.png" style="" class="visible-desktop visible-tablet pull-left">
                    </div>
                    <div class="span6">
                        <img src="../img/logo.png" style="height: 100px; width: 100%">
<!--                       <h4>Health Information System Program</h4>
                            <form class="navbar-form form-search pull-right">
                            <style>
                            .ui-autocomplete-loading {
                                   background: white url('../img/ui-anim_basic_16x16.gif') right center no-repeat;
                           }
                           </style>
                                   <div class="input-append">
                                     <input type="text" class=" search-query" placeholder="Search" id="searchpeople" name="querystring">
                                     <button type="submit" class="btn btn-primary" title="search" id="search-submit"><i class="icon-search icon-white"></i></button>
                                   </div>
                         </form>-->
                    </div>
                    <div class="span3" style="background-color:">
                        <img src="../img/udsm1.png" style="" class="visible-desktop visible-tablet pull-right">
                    </div>
                </div> 
		
            </header>  
        </div>
       
        <div class="row-fluid">
                <div class="span1"></div>
                <div class="span10">
                    <div class="row-fluid" >
                    <div class="span3  text-left" id="leftnav">
                        <?php include 'adminMenu.php'; ?>
                    </div>
                   <div class="span9" id="adminContents">
                       
                   </div>
                </div>
                </div>
                <div class="span1"></div>
            </div>
        <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../jqueryui/js/jquery-ui-1.10.3.custom.js"></script>
        <script type="text/javascript" src="../jqueryui/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="../js/jquery.form.js"></script>
        <script type="text/javascript" src="../DataTables/media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="../DataTables/media/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../js/admin.js"></script>
        <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    </body>
</html>
