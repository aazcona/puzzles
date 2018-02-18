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
		<title>Tablón de Novedades</title>
	</head>
	<body>
	<p><a href="cities.php"> Volver a la Selección de Niveles </a></p>
	<div class="main-container">
		<p> ACTUALIZACIÓN: VERSIÓN 0.3.0 </p>
		<p> ¡UNA DE LAS MÁS GRANDES DEL JUEGO! </p>
		<p> ¿Qué novedades trae? </p>
		<p> - Se han aplicado mejoras a la traducción del Español. </p>
		<p> - Se han añadido más enlaces para facilitar el desplazamiento por el juego. </p>
		<p> - Se ha reajustado el tamaño de las imágenes para evitar el uso de zoom del navegador. </p>	
		<p> - Se han reemplazado las imágenes de los niveles que tenían problemas para desplazar las piezas del puzzle. </p>
		<p> - Se ha rehabilitado el canal de YouTube. </p>
		<p> - Correciones de textos. </p>
		<p> - Se han hecho cambios en la Pantalla de Configuración. </p>
		<p> - Se han cambiado las imágenes verticales a horizontales para permitir un mejor desplazamiento de las piezas a la hora de jugar el nivel </p>
		<p> - Se han cambiado algunos niveles por otros lugares más conocidos de la ciudad. </p>
		<p> - ¡Nueva Sección de Noticias!. </p>
		<p> - ¡Nuevos cambios de balance! Consúltalos <a href="update-changes-2.php"> aquí. </a></p>
		<p> Por favor, si tienes algún problema, contacta con: "primitech.studios@gmail.com" </p>
		
		<p> ¿Podrás resolver el mundo del Puzzle? </p>
		<p> ¡Muchas gracias! </p>
		<p> &copy; 2017 - 2018 Primitech Studios </p>
	</div>
	</body>
</html>