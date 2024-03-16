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
		<title>Málaga</title>
	</head>
	<body>
	<p class="go-back-link"><a href="cities.php"> Volver a la Pantalla de Selección de Niveles </a></p>
	<div class="main-container">
		<ul>
			<li>
				<p>Jardín Botánico de la Concepción.
				<?PHP if ($logged){?>
					Puntos: <?= $fgmembersite->readPoints(7); ?></p>
				<?PHP } ?>
				<div>
					<p><a href="puzzle.php?name=malaga/jardin-botanico-concepcion-malaga">¡Hacer el puzzle!</a></p>
				</div>
			</li>
			<li>
				<p>Centro Histórico.
				<?PHP if ($logged){?>
					Puntos: <?= $fgmembersite->readPoints(8); ?></p>
				<?PHP } ?>
				<div>
					<p><a href="puzzle.php?name=malaga/centro-historico-malaga">¡Hacer el puzzle!</a></p>
				</div>
			</li>
			<li>
				<p>Teatro Romano.
				<?PHP if ($logged){?>
					Puntos: <?= $fgmembersite->readPoints(9); ?></p>
				<?PHP } ?>
				<div>
					<p><a href="puzzle.php?name=malaga/teatro-romano-malaga">¡Hacer el puzzle!</a></p>
				</div>
			</li>
		</ul>
		</div>
	</body>
</html>