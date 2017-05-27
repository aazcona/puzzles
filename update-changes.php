<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<title>Cambios de Balance</title>
	</head>
	<body>
	<div class="main-container">
		<p> CAMBIOS DE BALANCE (ACTUALIZACIÓN 0.2.0) </p>
		<p> ¿Qué cambios trae? </p>
		<p> - Se han reducido en 5 segundos el tiempo para conseguir las estrellas de Ceuta. </p>
		<p> - Se ha aumentado en 5 segundos el tiempo para conseguir las estrellas de Melilla. </p>
		<p> - Se ha reducido en 5 segundos el tiempo para conseguir las estrellas de Málaga. </p>
		<p> - Se ha reducido en 15 segundos el tiempo para conseguir las estrellas de Granada. </p>
		<p> - Se ha aumentado en 40 segundos el tiempo para conseguir las estrellas de Sevilla. </p>
		<p> - Se han multiplicado por 4 los puntos que se pueden conseguir en Melilla. </p>
		<p> - Se han multiplicado por 6 los puntos que se pueden conseguir en Málaga. </p>
		<p> - Se han multiplicado por 17 los puntos que se pueden conseguir en Granada. </p>
		<p> - Se han multiplicado por 19 los puntos que se pueden conseguir en Segovia. </p>
		<p> - Se han multiplicado por 50 los puntos que se pueden conseguir en Sevilla. </p>
		
		<p> ¿Podrás resolver el mundo del Puzzle? </p>
		<p> &copy; 2016 - 2017 Primitech Studios </p>
	</div>
	</body>
</html>