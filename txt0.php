<?php 

include "ayarlar.php";

$file = fopen($phpYolu, 'w');
fwrite($file, '
<input type="hidden" id="react" value="<?php  echo filemtime($phpYolu); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<nav style="background:white;" aria-label="breadcrumb">
  
    <center><img style="margin-top:20px; margin-left:0%;" src="https://iconarchive.com/download/i99456/webalys/kameleon.pics/Hacker.ico"  width="150">
    
</center>

  
  <center><b style="font-size:20px; font-family:Ubuntu,sans-serif;"><i style="" class="fas fa-user-cog"></i> Hesap Yönetim Paneli</b></center>
</nav>
<script type="text/javascript">
function asagiKaydir()
  {
  window.scrollBy(100,90000)
  }
</script>
<div style="background:white; margin-top:10px;" class="d-grid gap-2">
  <center><button onclick=\'var txt;
var r = confirm("Silmek İstediğinize eminmisiniz!");
if (r == true) {
				window.location.href="txt0.php";
} else {
  txt = "You pressed Cancel!";
}\' class="btn btn-danger" style="width:150px;" type="button"><i class="fas fa-trash-alt"></i> Listeyi Sıfırla</button>
	
	<button  onclick="asagiKaydir()" class="btn btn-primary" type="button"><i class="fas fa-arrow-down"></i> Listenin Sonuna Git</button>
	
	
 
</div>
 
<hr size="4px"> 
'); 
fclose($file); 

header('Location:'.$phpYolu)

?>

