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
		<title>ACTUALIZACIÓN v.0.40</title>
	</head>
	<body>
	<p><a href="news.html"> Volver al Tablón de Noticias </a></p>
	<div class="main-container">
		<p> ¡ACTUALIZACIÓN DEL 2º ANIVERSARIO DE WORLD PUZZLES!: VERSIÓN 0.40 </p>
		<p> ¿Qué novedades trae? </p>
		<p> - NUEVA CIUDAD: ¡BARCELONA! </p>
		<p> - Hemos decorado el juego y hemos agrandado algunos textos para reducir la dificultad de lectura de éstos. </p>
		<p> - Pronto traeremos más decoración. ¡Estad atentos a las próximas actualizaciones! </p>
		<p> - Se han realizado cambios menores en algunos textos. </p>
		<p> - Corrección de pequeños errores en algunas páginas. </p>
		

		<p> ¿Podrás resolver el mundo del Puzzle? </p>
		<p> &copy; 2017 - 2019 Primitech Studios </p>
	</div>
	</body>
</html>