<?php
  $message = 'bitcoin:1DonateWffyhwAjskoEwXt83pHZxhLTr8H?amount=0.01123';
  $size = '200x200';
 
  echo '<img src="https://chart.googleapis.com/chart?chs='. $size .'&cht=qr&chl='.
  urlencode($message) .'">' ;
?>


https://apirone.com/api/v1/ticker?currency=ltc