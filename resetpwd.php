<?PHP
require_once("./include/membersite_config.php");

$success = false;
if($fgmembersite->ResetPassword())
{
    $success=true;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Cambiar Contraseña</title>
      <link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css" />
      <link rel="stylesheet" type="text/css" href="css/common.css">
      <script type='text/javascript' src='js/gen_validatorv31.js'></script>
</head>
<body>
<div id='fg_membersite_content' class='main-container'>
	<?php
	if($success){
	?>
	<h2>La Contraseña ha sido Cambiada Correctamente</h2>
	Tu nueva contraseña ha sido enviada a tu dirección de e-mail.
	<?php
	}else{
	?>
	<h2>Error</h2>
	<span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span>
	<?php
	}
	?>
</div>
<p><a href="settings.html"> Volver a la Pantalla de Configuración </a></p>
<p><a href="login.php"> Volver al Inicio de Sesión </a></p>
</body>
</html>