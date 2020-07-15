

<!DOCTYPE html>
<html>  
<head>
	<meta charset="utf-8">
	<title>Php projem</title>
	<link rel="stylesheet" type="text/css" href="ayar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles.css">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="script.js"></script>
</head>
<body>

	<div class="ust">
		<h1>kolay video dersleri</h1>
		<b>youtube kanalı</b>
	</div>
	

	<div class="menu">	

		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='index.php'><span>anasayfa</span></a></li>
				<li><a href='index.php?git=indir'><span>indirme</span></a></li>
				<li><a href='index.php?git=hakkimda'><span>hakkında</span></a></li>
				<li class='last'><a href='index.php?git=iletisim'><span>iletişim</span></a></li>
			</ul>
		</div>

	</div>

	<div class="icerik">	
		<?php

		$a = @$_GET["git"];

		switch($a){

			case "indir":
			include ("indir.php");
			break;

			case "hakkimda":
			include ("hakkimda.php");
			break;

			case "iletisim":
			include ("iletisim.php");
			break;

			default:
			include("anasayfa.php");
			break;

		}




		?>



	</div>

	<div class="footer">

	burası footer kısmıdır	 kolay video dersleri copyright &copy 2016
	</div>


</body>
</html>