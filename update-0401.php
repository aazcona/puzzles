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
		<title>ACTUALIZACIÓN v.0.401</title>
	</head>
	<body>
	<p><a href="cities.php"> Volver a la Selección de Niveles </a></p>
	<div class="main-container">
		<p> NUEVO BUGFIX: VERSIÓN 0.401 </p>
		<p> ¿Qué novedades trae? </p>
		<p> - Arreglos menores de la actualización 0.40. </p>
		<p> ¿Podrás resolver el mundo del Puzzle? </p>
		<p> &copy; 2017 - 2019 Primitech Studios </p>
	</div>
	</body>
</html>