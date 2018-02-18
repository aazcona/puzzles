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
		<p><a href="update-changes-2.php"> Cambios de Balance (Versión 0.2.6 - 19/02/2018) </a></p>
		<p><a href="update-changes.php"> Cambios de Balance (Versión 0.2.0 - 08/04/2017) </a></p>
	</div>
	</body>
</html>