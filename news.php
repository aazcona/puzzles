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
		<title>Noticias</title>
	</head>
	<body>
	<p><a href="index.html"> Volver al Inicio </a></p>
	<div class="main-container">
	<p> ¡Bienvenido a la Sección de Noticias! Aquí iremos publicando nuestras novedades más recientes. ¡Esperamos que os guste! </p>
		<p><a href="update-0402.php"> Corrección de error en el servidor (Versión 0.402 - 10/03/2024) </a></p>
		<p><a href="update-0401.php"> Correcciones de errores (Versión 0.401 - 30/06/2022) </a></p>
		<p><a href="update-0400.php"> ¡ACTUALIZACIÓN DEL 2º ANIVERSARIO DE WORLD PUZZLES! (Versión 0.40 - 11/01/2019) </a></p>
		<p><a href="update-0315.php"> ¡Arreglos de Errores! (Versión 0.315 - 09/03/2018) </a></p>
		<p><a href="update-031.php"> ¡Nueva Actualización! (Versión 0.31 - 03/03/2018) </a></p>
		<p><a href="update-changes-2.php"> Cambios de Balance (Versión 0.30 - 18/02/2018) </a></p>
		<p><a href="update-changes.php"> Cambios de Balance (Versión 0.20 - 08/04/2017) </a></p>
	</div>
	</body>
</html>