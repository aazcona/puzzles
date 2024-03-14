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
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<title>Cambios de Balance 18/02/2018</title>
	</head>
	<body>
	<p><a href="news.html"> Volver al Tablón de Noticias </a></p>
	<div class="main-container">
		<p> CAMBIOS DE BALANCE (ACTUALIZACIÓN 0.3.0) </p>
		<p> ¿Qué cambios trae? </p>
		<p> - Se ha aumentado en un 25% los puntos que se pueden conseguir en Melilla. </p>
		<p> - Se ha aumentado en un 67% los puntos que se pueden conseguir en Segovia. </p>
		<p> - Se ha reducido en un 22% los puntos que se pueden conseguir en Madrid. </p>
		<p> - Nota: Estos cambios fueron aplicados para que los puntos vayan subiendo de manera progresiva en cada ciudad. Desde el equipo de Primitech Studios, queremos deciros que somos un equipo al que le gusta probar nuevas cosas, así que en estos cambios queremos probar si los puntos suben de una mejor manera. </p>
		
		<p> ¿Podrás resolver el mundo del Puzzle? </p>
		<p> &copy; 2017 - 2018 Primitech Studios </p>
	</div>
	</body>
</html>