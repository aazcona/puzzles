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
		<title>Madrid</title>
	</head>
	<body>
	<p><a href="cities.php"> Volver a la Pantalla de Selección </a></p>
	<div class="main-container">
		<ul>
			<li>
				<p>Plaza Mayor. 
					<?PHP if ($logged){?>
						 Puntos: <?= $fgmembersite->readPoints(19); ?></p>
					<?PHP } ?>
				<div>
					<p><a href="puzzle.php?name=madrid/plaza-mayor-madrid">¡Hacer el puzzle!</a></p>

				</div>
			</li>
			<li>
				<p>BLOQUEADO (PRONTO)</p>
				<img src="images/candado.png"/>
			</li>
			<li>
				<p>BLOQUEADO (PRONTO)</p>
				<img src="images/candado.png"/>
			</li>
		</ul>
	</div>
	</body>
</html>