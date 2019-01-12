<?PHP
	require_once("./include/membersite_config.php");
	$logged = $fgmembersite->CheckLogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<link rel="stylesheet" type="text/css" href="css/city.css">
		<title>Barcelona</title>
	</head>
	<body>
		<ul class="links">
			<li class="go-to-level-selection-option"><a href="cities.php"> Volver a la Pantalla de Selección </a></p>
		</ul>
	<div class="main-container">
		<ul>
			<li>
				<p>Palacio de la Generalidad. 
					<?PHP if ($logged){?>
						 Puntos: <?= $fgmembersite->readPoints(22); ?></p>
					<?PHP } ?>
				<div>
					<p><a href="puzzle.php?name=barcelona/palacio-generalidad-barcelona">¡Hacer el puzzle!</a></p>

				</div>
			</li>
			<li>
				<p>Puerto de Barcelona.
					<?PHP if ($logged){?>
						 Puntos: <?= $fgmembersite->readPoints(23); ?></p>
					<?PHP } ?></p>
				<div>
					<p><a href="puzzle.php?name=barcelona/puerto-barcelona">¡Hacer el puzzle!</a></p>
				</div>
			</li>
			<li>
				<p>Rambla de Barcelona.
					<?PHP if ($logged){?>
						 Puntos: <?= $fgmembersite->readPoints(24); ?></p>
					<?PHP } ?></p>
				<div>
					<p><a href="puzzle.php?name=barcelona/rambla-barcelona">¡Hacer el puzzle!</a></p>
				</div>
			</li>
		</ul>
	</div>
	</body>
</html>