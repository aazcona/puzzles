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
		<title>Sevilla</title>
	</head>
	<body>
	<p><a href="cities.php"> Volver a la Pantalla de Selección </a></p>
		<div class="main-container">
			<ul>
				<li>
					<p>Portal del Palacio de San Telmo.
					<?PHP if ($logged){?>
						 Puntos: <?= $fgmembersite->readPoints(16); ?></p>
					<?PHP } ?>
					<div>
						<p><a href="puzzle.php?name=sevilla/portal-palacio-telmo">¡Hacer el puzzle!</a></p>
					</div>
				</li>
				<li>
					<p>Alcázar de Sevilla.
					<?PHP if ($logged){?>
						 Puntos: <?= $fgmembersite->readPoints(17); ?></p>
					<?PHP } ?>
					<div>
						<p><a href="puzzle.php?name=sevilla/alcazar-sevilla">¡Hacer el puzzle!</a></p>
					</div>
				</li>
				<li>
					<p>Plaza de España.
					<?PHP if ($logged){?>
						 Puntos: <?= $fgmembersite->readPoints(18); ?></p>
					<?PHP } ?>
					<div>
						<p><a href="puzzle.php?name=sevilla/plaza-espana-sevilla">¡Hacer el puzzle!</a></p>
					</div>
				</li>
			</ul>
		</div>
	</body>
</html>