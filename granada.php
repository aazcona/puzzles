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
		<link rel="stylesheet" type="text/css" href="css/city.css">
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<title>Granada</title>
	</head>
	<body>
	<div class="main-container">
		<ul>
			<li>
				<p>Iglesia de Santo Domingo</p>
				<div>
					<p><a href="puzzle.php?name=granada/iglesia-santo-domingo-granada">¡Hacer el puzzle!</a></p>
				</div>
			</li>
			<li>
				<p>Parque de Federico García Lorca</p>
				<div>
					<p><a href="puzzle.php?name=granada/parque-federico-garcia-lorca-granada">¡Hacer el puzzle!</a></p>
				</div>
			</li>
			<li>
				<p>Plaza Bib-Rambla</p>
				<div>
					<p><a href="puzzle.php?name=granada/plaza-bib-rambla-granada">¡Hacer el puzzle!</a></p>
				</div>
			</li>
		</ul>
	</div>
	</body>
</html>