<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    //$fgmembersite->RedirectToURL("login.php");
    //exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/city.css">
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<title>Melilla</title>
	</head>
	<body>
	<div class="main-container">
		<ul>
			<li>
				<p>Faro de Melilla</p>
				<div>
					<p><a href="puzzle.php?name=melilla/faro-melilla">¡Hacer el puzzle!</a></p>
				</div>
			</li>
			<li>
				<p>Arquitectura de Melilla</p>
				<div>
					<p><a href="puzzle.php?name=melilla/arquitectura-melilla">¡Hacer el puzzle!</a></p>
				</div>
			</li>
			<li>
				<p>Iglesia de la Purísima Concepción</p>
				<div>
					<p><a href="puzzle.php?name=melilla/iglesia-purisima-concepcion">¡Hacer el puzzle!</a></p>
				</div>
			</li>
		</ul>
		</div>
	</body>
</html>