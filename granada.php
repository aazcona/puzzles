<?PHP
	require_once("./include/membersite_config.php");
	$logged = $fgmembersite->CheckLogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/city.css">
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<title>Granada</title>
	</head>
	<body>
	<p><a href="cities.php"> Volver a la Pantalla de Selección </a></p>
	<div class="main-container">
		<ul>
			<li>
				<p>Iglesia de Santo Domingo.
				<?PHP if ($logged){?>
					Puntos: <?= $fgmembersite->readPoints(13); ?></p>
				<?PHP } ?>
				<div>
					<p><a href="puzzle.php?name=granada/iglesia-santo-domingo-granada">¡Hacer el puzzle!</a></p>
				</div>
			</li>
			<li>
				<p>Parque de Federico García Lorca.
				<?PHP if ($logged){?>
					Puntos: <?= $fgmembersite->readPoints(14); ?></p>
				<?PHP } ?>
				<div>
					<p><a href="puzzle.php?name=granada/parque-federico-garcia-lorca-granada">¡Hacer el puzzle!</a></p>
				</div>
			</li>
			<li>
				<p>Plaza Bib-Rambla.
				<?PHP if ($logged){?>
					Puntos: <?= $fgmembersite->readPoints(15); ?></p>
				<?PHP } ?>
				<div>
					<p><a href="puzzle.php?name=granada/plaza-bib-rambla-granada">¡Hacer el puzzle!</a></p>
				</div>
			</li>
		</ul>
	</div>
	</body>
</html>