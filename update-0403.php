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
		<title>ACTUALIZACIÓN v.0.403</title>
	</head>
	<body>
    <p><a href="cities.html"> Volver a la Selección de Niveles </a></p>
    <p><a href="news.php"> Volver al Tablón de Noticias </a></p>
	<div class="main-container">
		<p> NUEVO BUGFIX: VERSIÓN 0.403 </p>
		<p> ¿Qué novedades trae? </p>
        <p> - Arreglado un error de imagen no encontrada en el menú principal. </p>
        <p> - Arreglado un error en algunas páginas con información sobre las actualizaciones. </p>
        <p> - El acceder a la pestaña Perfil ya no dará un error 404. </p>
        <p> - Cambios menores en varios textos. </p>
		<p> ¿Podrás resolver el mundo del Puzzle? </p>
		<p> &copy; 2024 Primitech Studios </p>
	</div>
	</body>
</html>