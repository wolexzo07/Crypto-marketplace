<?php
session_start();
if(isset($_SESSION["TIMBOSS_CRYPTBUY_ID"])){
	?>
	<script>
	window.location = "dashboard";
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>CryptaBuy - Membership</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/custom.css"/>
		<script src="js/jquery.js"></script>
		<script type="text/javascript" src="js/online.js"></script>
    </head>
    <body class="bold">

	<div class="container">
	<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bai">
		<script type="text/javascript" src="workitout.js"></script>
	
	<!---------------Register Form Started---------------------------------------->
	<?php include("registerPart.php");?>
	<!---------------Login Form Ended---------------------------------------->
	
	<!---------------Login Form Started---------------------------------------->
	<?php include("loginPart.php");?>
	<!---------------Login Form Ended---------------------------------------->
	
	
	<!---------------Reset Form Started---------------------------------------->
	<?php include("resetPart.php");?>
	<!---------------Login Form Ended---------------------------------------->
	
	
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	</div>
	
	</div>
	
	</div>
	
	<style type="text/css">
	
	
	</style>
     
        <!-- Bootstrap Js CDN -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
				 
				 $(".RegBtn").click(function(){
				    $(".registerPanel").show("slow");
					$(".loginPanel").hide("slow");
					$(".resetPanel").hide("slow");
				 });
				
				 $(".LogBtn").click(function(){
					 $(".loginPanel").show("slow");
					 $(".registerPanel").hide("slow");
					 $(".resetPanel").hide("slow");
				 });
				  
				 $(".LostBtn").click(function(){
					 $(".resetPanel").show("slow");
					 $(".loginPanel").hide("slow");
					 $(".registerPanel").hide("slow");
				 });
                 
             });
         </script>
		 
	 <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>