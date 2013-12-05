<!-- Footer ================================================================== -->
	<div  id="footerSection" class="container">
	<div class="row-fluid">
		<div class="row-fluid visible-desktop visible-tablet">
			<div class="span4 text-left">
				<h5>USEFUL LINKS</h5>
				<a href="#">MOHSW</a>
				<a href="#">JICA</a> 
				<a href="#">OSLO UNIVERSITY</a> 
				<a href="#">MUHAS</a>  
				<a href="#">IFAKARA HEALTH INSTITUTE</a>
			 </div>
			<div class="span4 text-left">
				<h5>RESOURCES</h5>
				<a href="resources.php?rtype=Documentations">DOCUMENTATION</a>  
				<a href="resources.php?rtype=Presentation">PRESENTATIONS</a>  
				<a href="resources.php?rtype=Publications">PUBLICATION</a>  
				<a href="resources.php?rtype=Manuals">MANUALS</a> 
				<a href="resources.php?rtype=Reports">REPORTS</a>
			 </div>
			
			<div id="socialMedia" class="span4 pull-right text-left">
				<h5>FIND US </h5>
                                        <address>
                                        <strong> The Coordinator </strong><br>
                                        HISP<br>
                                        <!--Department of Computer Science and Engineering<br>-->
                                        <!--Ground Floor, Science Workshop Building <br>-->
                                        P.O BOX 35062 Dar es Salaam<br>
                                        TANZANIA - EAST AFRICA<br>
                                        <abbr title="Phone">P:</abbr> +255-22-2410500/9<br> 
                                        <abbr title="Mobile"><i class="icon-phone"></i>:</abbr> +255 784 147946 <br>

                                        <a href="mailto: coordinator@hisptanzania.or.tz"> coordinator@hisptanzania.or.tz</a>
                                      </address>
			 </div> 
		 </div>
            <p class="pull-right"><a href="#" id="adminlogin" class="adminlogin">Admin</a></p>
	</div><!-- Container End -->
	</div>
<script>
$(document).ready(function(){
   $("#adminlogin").click(function(){
         var modal = "";
                modal +="<div id='addUser' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='false'>";
                modal += "<div class='modal-header'>";
                modal += "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>";
                modal += "<h3>Private Area Login</h3>";
                modal += "</div>";
                modal += "<div class='modal-body'>";
                modal += "<form>";
                modal +="<p>Username: <input type='text' placehoder='Username' name='email' /></p>";
                modal +="<p>Password: <input type='password' placehoder='Password' name='pass' /></p>";
                modal +="<p id='errorarea' style='color:red'><p>";
                modal += "</div>";
                modal += "<div class='modal-footer'>";
                //modal += "<a href='#' id='closemodal' class='btn' data-dismiss='modal' aria-hidden='true'>Cancel</a>";
                modal += "<a href='#'  class='btn btn-primary' id='closemodal'>Login</a>"; 
                modal += "</div>";
                modal += "</form>";
                modal += "</div>";
                $("body").append(modal);
                $("#addUser input[type=text]").focus(function(){
                    $("#addUser #errorarea").empty().hide();
                });
                $('#addUser').modal("show");
                $("#closemodal").click(function(){
                    $("#addUser #errorarea").empty().hide();
                     if($("#addUser input[type=text]").val() === ""){
                         alert("please fill all field");
                     }else{
                     var email = $("#addUser input[name=email]").val();
                     var pass = $("#addUser input[name=pass]").val();
                     $.post("includes/form_processor.php?page=login",{email:email,pass:pass},function(data){
                         //alert(data);
                         if(data ==="success"){
                             window.location.assign("admin/");
                         }else{
                         $("#addUser #errorarea").append(data).show("slow");
                         
                         }
                    });
                     }
                });
    }); 
});
</script>
