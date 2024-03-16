<?PHP
require_once("./include/membersite_config.php");

if(isset($_GET['code']))
{
   if($fgmembersite->ConfirmUser())
   {
        $fgmembersite->RedirectToURL("thank-you-regd.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Confirmar Registro</title>
      <link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css" />
      <link rel="stylesheet" type="text/css" href="css/common.css">
      <script type='text/javascript' src='js/gen_validatorv31.js'></script>
</head>
<body>
<p class ="go-back-link"> <a href="settings.html"> Volver a la Configuración </a></p>
<h2>Confirmar Registro</h2>
<p>
Por favor, escribe el código de confirmación en el espacio de abajo.
</p>

<!-- Form Code Start -->
<div id='fg_membersite' class="container">
	<form id='confirm' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='get' accept-charset='UTF-8'>
	<div class='short_explanation'>* Campos Requeridos</div>
	<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
	<div class='container'>
	    <label for='code' >Código de Confirmación:* </label><br/>
	    <input type='text' name='code' id='code' maxlength="50" /><br/>
	    <span id='register_code_errorloc' class='error'></span>
	</div>
	<div class='container'>
	    <input type='submit' name='Submit' value='Enviar' />
	</div>

	</form>
	<!-- client-side Form Validations:
	Uses the excellent form validation script from JavaScript-coder.com-->

	<script type='text/javascript'>
	// <![CDATA[

	    var frmvalidator  = new Validator("confirm");
	    frmvalidator.EnableOnPageErrorDisplay();
	    frmvalidator.EnableMsgsTogether();
	    frmvalidator.addValidation("code","req","Please enter the confirmation code");

	// ]]>
	</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>