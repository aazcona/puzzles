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
	<div class="main-container">
		<p> ACTUALIZACIÓN: VERSIÓN 0.2.5 </p>
		<p> ¡Esta es la actualización más grande hasta el momento de World Puzzles! </p>
		<p> ¿Qué novedades trae? </p>
		<p> - Nueva función: ¡Iniciar Sesión para guardar tus datos! </p>
		<p> - Se ha mejorado el servidor y a partir de ahora, los datos serán guardados automáticamente en el servidor. </p>
		<p> - Se ha añadido la opción de volver a la Pantalla de Inicio en la Pantalla de Selección. </p>
		<p> - Se ha añadido la opción de ver tu mejor puntuación en un puzzle. </p>
		<p> - Se ha eliminado la música para diseñar un mejor sistema en futuras actualizaciones. </p>
		<p> - Si todavía no has visto los cambios de balance de la versión 0.2.0, puedes consultarlos <a href="update-changes.php"> aquí. </a></p>
		<p> Por favor, si tienes algún problema, contacta con: "primitech.studios@gmail.com" </p>
		
		<p> ¿Podrás resolver el mundo del Puzzle? </p>
		<p> ¡Muchas gracias! </p>
		<p> &copy; 2017 - 2018 Primitech Studios </p>
	</div>
	</body>
</html>