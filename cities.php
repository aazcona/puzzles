<?PHP
	require_once("./include/membersite_config.php");
	$logged = $fgmembersite->CheckLogin();
?>
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
					<span class="left">¡Bienvenido, <?= $fgmembersite->UserFullName(); ?>!</span>
					<span class="right"><a href='logout.php'>Cerrar Sesión</a></span>
				</div>
			<?PHP } ?>
			<p class="go-back-link"> <a href="index.html"> Volver al Inicio </a>
			<ul class="cities">
				<li class="ceuta-option"><a href="ceuta.php">|1| Ceuta</a></li>
				<li class="melilla-option"><a href="melilla.php">|2| Melilla</a></li>
				<li class="malaga-option"><a href="malaga.php">|3| Málaga</a></li>
				<li class="segovia-option"><a href="segovia.php">|4| Segovia</a></li>
				<li class="granada-option"><a href="granada.php">|5| Granada</a></li>
				<li class="sevilla-option"><a href="sevilla.php">|6| Sevilla</a></li>
				<li class="madrid-option"><a href="madrid.php">|7| Madrid</a></li>	
				<li class="barcelona-option"><a href="barcelona.php">|8| Barcelona</a></li>
			</ul>
			<ul class="links-cities">
				<li class="tutorial-option"><a href="tutorial.html"> Tutorial y Preguntas Frecuentes </a></p>
				<li class="update-news-option"><a href="update-log/update-0460.html"> Tablón de Novedades </a></p>
			</ul>
		</div>
	</body>
</html>