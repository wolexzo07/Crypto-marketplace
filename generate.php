<?php
include("justlibrary/finishit.php");
$content = "
Classic Unisex Laundry
Director:Adesina Abiola A
Mobile No : 08134668054,09027435406 and 08061581918
Email : adesinaabiola54@gmail.com
Address : Sabon Titin, Kwado opp Mosallacin dillaleh Katsina State.
";
$path = "qrcoder/qr.png";
$path_validation = "0";
x_qrcode($content,$path,$path_validation);
?>