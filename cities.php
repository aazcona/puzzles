<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/cities.css">
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<title>Selección de Niveles</title>
	</head>
	<body>
		<div class="main-container">
			<?PHP if ($logged){?>
				<div id="logged-user">
					<span class="left">Hello <?= $fgmembersite->UserFullName(); ?></span>
					<span class="right"><a href='logout.php'>Logout</a></span>
				</div>
			<?PHP } ?>
			<ul class="cities">
				<li class="ceuta-option"><a href="ceuta.php">Ceuta</a></li>
				<li class="melilla-option"><a href="melilla.php">Melilla</a></li>
				<li class="malaga-option"><a href="malaga.php">Málaga</a></li>
				<li class="segovia-option"><a href="segovia.php">Segovia</a></li>
				<li class="granada-option"><a href="granada.php">Granada</a></li>
				<li class="sevilla-option"><a href="sevilla.php">Sevilla</a></li>
				<li class="madrid-option">
					<a href="madrid.html">Madrid</a>
					<img src="images/candado.png"/>
				</li>
					
				<li class="barcelona-option">
					<a href="barcelona.php">Barcelona</a>
					<img src="images/candado.png"/>
				</li>
				<li class="valencia-option">
					<a href="valencia.php">Valencia</a>
					<img src="images/candado.png"/>
				</li>
				<li class="huelva-option">
					<a href="huelva.php">Huelva</a>
					<img src="images/candado.png"/>
				</li>
			</ul>
			<p> <a href="tutorial.php"> Tutorial y Preguntas Frecuentes (1) </a> </p>
			<p> <a href="update-news.php"> Tablón de Novedades (2) </a> </p>
		</div>
	</body>
</html>