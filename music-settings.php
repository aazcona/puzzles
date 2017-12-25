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
		<link rel="stylesheet" type="text/css" href="css/cities.css">
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<title>Configuración</title>
	</head>
	<body>
		<div class="main-container">
			<form action="/action_page.php">
				Música: <input type="checkbox" name="music"><br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>