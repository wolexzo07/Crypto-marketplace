<?php 
session_start();
include("../justlibrary/finishit.php");
include("../justlibrary/cryptabuyExtension.php");
include("validate_owner.php"); // Authenticating super user
?>
<div class="row">
						
	<div class="col-md-12">
	
		<div class="row">			
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<script src="workitout.js"></script>
		<ul class="list-group mt-1">
		<li class="list-group-item">
					<center><img src="img/icon/admin.png" class="avatar"/></center>
					</li>
			<li style="" class="list-group-item">
			<span onclick="load('justme')" type="button" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i></span> <span onclick="load('registeredUsers')" type="button" id="payoff" class="btn btn-success btn-sm"><i class="fa fa-refresh"></i></span>&nbsp;&nbsp;&nbsp;<i class="fa fa-users"></i> &nbsp;&nbsp;Registered users
			</li>
			
			<li class="list-group-item">
				<div id="fetchRegistered1"></div>
				<div id="fetchRegistered"></div>
				
				<div class="btn-group btn-group-sm">
					  <span onclick="load('justme')" type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i></span>
					  <span onclick="load('registeredUsers')" type="button" id="payoff" class="btn btn-success"><i class="fa fa-refresh"></i></span>	
				</div>
			</li>
			

				
			
	</ul>
			
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
		</div>
				
	<!---<h4 class="headerText"><i class="fa fa-pie-chart"></i>&nbsp;&nbsp; BTC <font style="color:purple;">CURRENT RATES</font></h4>--->
		

	</div>
	

							
</div>
		