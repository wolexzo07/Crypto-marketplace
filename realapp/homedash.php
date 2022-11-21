<?php 
session_start();
include("../justlibrary/finishit.php");
include("../justlibrary/cryptabuyExtension.php");
if(x_validatesession("TIMBOSS_CRYPTBUY_ID")){
	$user = x_clean($_SESSION["TIMBOSS_CRYPTBUY_ID"]);
	$path = x_clean($_SESSION["TIMBOSS_CRYPTBUY_PATH"]);
	?>
	
<script src="workitout.js"></script>
<div class="row">
						
	<div class="col-md-12">
				<ul class="list-group mt-2">
				<li style="padding:20px;" class="list-group-item">
				<div class="deskimage text-center"><img src="<?php
				if($path == ""){
					echo "img/avatar.png";
				}else{
					if(file_exists($path)){
						echo $path;
					}else{
						echo "img/avatar.png";
					}
				}
				?>" class="userprofile"/> &nbsp;&nbsp;&nbsp;
				<b>Hi <?php 
			$str = $_SESSION["TIMBOSS_CRYPTBUY_NAME"];
			$split = explode(" ",$str);
			echo $split[0];
			?></b> </div>
				</li>
				<li class="list-group-item"><h5><span style="padding-bottom:8px;padding-top:8px;padding-left:10px;padding-right:10px;border-radius:200px;-moz-border-radius:200px;-webkit-border-radius:200px;-o-border-radius:200px;background-color:green;" class="badge"><i class="fa fa-bitcoin"></i></span>&nbsp;&nbsp;&nbsp;
				<b><?php 
				$userid = x_clean($_SESSION["TIMBOSS_CRYPTBUY_ID"]);
					echo number_format(x_getbalance("btc_wallet",$userid),8);
				?> BTC</b>  <br/><small style="font-weight:;font-size:9pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "USD ".x_btc2usd(x_getbalance("btc_wallet",$userid));?></small></h5></li>
				<li class="list-group-item"><h5><span style="padding:8px;border-radius:100px;-moz-border-radius:100px;-webkit-border-radius:100px;-o-border-radius:100px;background-color:purple;" class="badge"><i class="fa fa-money"></i></span>&nbsp;&nbsp;&nbsp;<b>NGN 
				<?php 
					
					echo number_format(x_getbalance("naira_wallet",$userid),2);
				?></b> <span class="fa fa-credit-card pull-right"></span></h5></li>
				
				</ul>
		<h4 class="headerText"><i class="fa fa-pie-chart"></i>&nbsp;&nbsp; BTC <font style="color:purple;">CURRENT RATES</font></h4>
		
			<ul class="list-group mt-2">
				<li class="list-group-item"><h5 class="rateTxt"><span style="padding:8px;border-radius:100px;-moz-border-radius:100px;-webkit-border-radius:100px;-o-border-radius:100px;background-color:green;" class="badge"><i class="fa fa-bank"></i></span>&nbsp;&nbsp;&nbsp; 1 BTC =  <?php echo x_btcprice("USD","1");?> </h5></li>
				<li class="list-group-item"><h5 class="rateTxt"><span style="padding:8px;border-radius:100px;-moz-border-radius:100px;-webkit-border-radius:100px;-o-border-radius:100px;background-color:purple;" class="badge"><i class="fa fa-money"></i></span>&nbsp;&nbsp;&nbsp;Sell @ NGN <?php echo number_format(x_getrates("sell_rate"),2);?> / USD</h5></li>
				<li class="list-group-item"><h5 class="rateTxt"><span style="padding-bottom:8px;padding-top:8px;padding-left:10px;padding-right:10px;border-radius:200px;-moz-border-radius:200px;-webkit-border-radius:200px;-o-border-radius:200px;background-color:green;" class="badge"><i class="fa fa-bitcoin"></i></span>&nbsp;&nbsp;&nbsp;Buy @ NGN <?php echo number_format(x_getrates("buy_rate"),2);?> / USD</h5></li>
			</ul>

		
	<h4 class="headerText"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp; TRACK <font style="color:purple;">TRANSACTIONS</font></h4>
			<div class="btn-group">
			<button style="padding:10px;font-size:9pt;" id="approvedBtn" type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> Approved</button>
			
			  <button style="padding:10px;font-size:9pt;" id="pendingBtn" type="button" class="btn btn-info"><i class="glyphicon glyphicon-time"></i> Pending</button>
			  
			  <button style="padding:10px;font-size:9pt;" id="cancelledBtn" type="button" class="btn btn-danger"><i class="fa fa-check-circle"></i> Cancelled</button>
			</div>
			
			<div id="pendingTransaction1"></div><!----Loader--->
			<div id="pendingTransaction"></div>
			
			<div id="approvedTransaction1"></div> <!---Loader--->
			<div id="approvedTransaction"></div>
			
			<div id="cancelledTransaction1"></div><!---Loader--->
			<div id="cancelledTransaction"></div>
<style>
.glyphicon-circle-arrow-down{
	color:green;
}
.glyphicon-circle-arrow-up{
	color:gray;
}

</style>


	</div>
	

							
</div>
		
	<?php
}
?>