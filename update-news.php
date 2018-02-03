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
		<title>Tablón de Novedades y Noticias</title>
	</head>
	<body>
	<p><a href="cities.php"> Volver a la Selección de Niveles </a></p>
	<div class="main-container">
		<p> ACTUALIZACIÓN (BUGFIX): VERSIÓN 0.2.52 </p>
		<p> ¿Qué novedades trae? </p>
		<p> - Se han arreglado otros fallos en la pestaña de Créditos. </p>
		<p> - Se han hecho pequeños cambios en el tutorial. </p>
		<p> - Arreglado un Fallo en la Configuración del Juego. </p>
		<p> - Pequeñas mejoras en la traducción al Español (Recordamos que en futuras actualizaciones este juego estará disponible en más idiomas). </p>
		<p> - Se han eliminado los enlaces a Facebook y a YouTube debido a que no hay ningún tipo de actividad reciente (de momento mantendremos Twitter y Google +)
		<p> - Si todavía no has visto los cambios de balance de la versión 0.2.0, puedes consultarlos <a href="update-changes.php"> aquí. </a></p>
		<p> Por favor, si tienes algún problema, contacta con: "primitech.studios@gmail.com" </p>
		
		<p> ¿Podrás resolver el mundo del Puzzle? </p>
		<p> ¡Muchas gracias! </p>
		<p> &copy; 2017 - 2018 Primitech Studios </p>
	</div>
	</body>
</html>