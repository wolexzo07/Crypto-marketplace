<?php 
session_start();
include("../justlibrary/finishit.php");
include("../justlibrary/cryptabuyExtension.php");
?>
<?php
if(!isset($_SESSION["TIMBOSS_CRYPTBUY_ID"])){
	?>
	<script>
	window.location = "register";
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cryptabuy - Dashboard</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all"/>
        <link rel="stylesheet" href="css/style3.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/specialCustom.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/btc.css" type="text/css" media="all"/>

		<script type="text/javascript" src="js/Toast.js"></script>
		<script type="text/javascript" src="js/hook.js"></script>
        <script type="text/javascript" src="js/online.js"></script>
		     <!-- jQuery CDN -->
		<script src="js/jquery.js"></script>
		<script src="js/clipboard.min.js"></script>
		<script src="https://js.paystack.co/v1/inline.js"></script>
		 <!----Jquery mobile css -->
		 <!--<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css"/>-->
    </head>
    <body>
	<style>
	ul{
		opacity:;
	}
	</style>
	<script type="text/javascript">
	$(document).ready(function(){
	$("#menuGist").click(function(){
		$(".menuTag").toggle("slow");
	});
});
</script>

        <div class="wrapper">
            <!-- Sidebar Holder -->
           

            <!-- Page Content Holder -->
            <div id="content">

			<div class="container-fluid">
			<div class="row">
			<div class="col-md-12">
					<script src="workitout.js"></script>					
			<h3 class="welcome"> <font id="lblGreetings" style="color:green">Welcome</font>&nbsp;<img src="img/smiley.png" style="width:20px;border-radius:50%;"/><span id="clickNote" onclick="load('Fetch_Notifications')" class="pull-right"><i class="fa fa-bell fa-1x"></i><span style="font-size:6pt;margin-bottom:10pt;" id="notecounter" class="badge">
			</span></span></h3>
			<script>
				var myDate = new Date();
				var hrs = myDate.getHours();

				var greet;

				if (hrs < 12)
					greet = 'Good Morning';
				else if (hrs >= 12 && hrs <= 17)
					greet = 'Good Afternoon';
				else if (hrs >= 17 && hrs <= 24)
					greet = 'Good Evening';

				document.getElementById('lblGreetings').innerHTML =
					'<b>' + greet + '</b>';
			</script> 


							<!--- <div class="line"></div>-->

			</div>
			</div>
			</div>
				
			<!---------------Just make the content work---------------->
			<div style="display:none;position:fixed;top:20%;left:37%;z-index:10000" id="loadTemporal" class="text-center"></div>
			<div style="background-image:url();background-attachment:fixed;background-color:transparent;padding-left:0pt;padding-right:0pt;" class="container-fluid" id="calculate"></div>
			
			<!---------------Just make the content work---------------->
		
               
            </div>
        </div>



 <div class="menuTag">
	<ul class="list-group">
		<li onclick="load('homedash')" class="list-group-item"><i class="fa fa-dashboard"></i>&nbsp;&nbsp; Dashboard 
		<span class="pull-right badge" style="background:lightgray;color:white;"></span>
		</li>
		<?php
		// Validate admin role
		$user = $_SESSION["TIMBOSS_CRYPTBUY_ID"];
		$getrole  = x_getsingle("select role from createusers where id='$user' LIMIT 1","createusers where id='$user' LIMIT 1","role");
		
		if($getrole == "1"){
			?>
		<li onclick="load('justme')" class="list-group-item"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Admin Manager 
		<span class="pull-right badge" style="background:lightgray;color:white;"></span>
		</li>
			<?php
		}
		
		?>
		<!----<li onclick="load('add-bank')" class="list-group-item"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add Bank Details 
		<span class="pull-right badge" style="background:lightgray;color:white;"></span>
		</li>-->
		<li onclick="load('btcConverter')" class="list-group-item"><i class="fa fa-calculator"></i>&nbsp;&nbsp; Bitcoin Calculator
		<span class="pull-right badge" style="background:lightgray;color:white;"></span>
		</li>
		
		<li onclick="load('settings-base')" class="list-group-item"><i class="fa fa-cog"></i> &nbsp;&nbsp;Settings
		<span class="pull-right badge" style="background:lightgray;color:white;"></span>
		</li>
		<li onclick="load('AccountLogout')" class="list-group-item"><i class="fa fa-sign-out"></i>&nbsp;&nbsp; Logout 
		<span class="pull-right badge" style="background:lightgray;color:white;"></span>
		</li>
	
	</ul>
 
 </div>       

<div class="mobilemenu">
	<div class="container-fluid">
	
	<div class="row">

		<div onclick="load('top-up')" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-left">
				<!---<button onclick="load('top-up')" class="btn btn-updated"><i class="fa fa-credit-card"></i><br/>Top-up</button>--->
				<span class="btn btn-updated"><i class="fa fa-credit-card"></i><br/> Fund</span>
		</div>
		
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-left">
				<span onclick="load('buy-btc')" class="btn btn-updated"><i class="fa fa-bitcoin"></i><br/>Buy</span>
		</div>
		
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-left">
				<span onclick="load('sell-btc')" class="btn btn-updated"><i class="fa fa-money"></i><br/>Sell</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-left">
				<span id="menuGist" class="btn btn-updated"><i class="glyphicon glyphicon-align-left"></i><br/>Menu</span>
		</div>
			
	</div>
	
	</div>
	
</div>	
 
       

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<!----<script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script>--->
		<script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
		 <script type="text/javascript">
            $(document).ready(function () {
				load('homedash'); // Initializing the homepage
          });
        </script>
		
    </body>
</html>
