<?PHP
require_once("./include/membersite_config.php");

$emailsent = false;
if(isset($_POST['submitted']))
{
   if($fgmembersite->EmailResetPasswordLink())
   {
        $fgmembersite->RedirectToURL("reset-pwd-link-sent.html");
        exit;
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	<title>Petición de Cambiar la Contraseña</title>
	<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<script type='text/javascript' src='js/gen_validatorv31.js'></script>
</head>
<body>
	<p class = "go-back-link"><a href="settings.html"> Volver a la Pantalla de Configuración </a></p>
	<!-- Form Code Start -->
	<div id='fg_membersite' class='container'>
		<form id='resetreq' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
		<fieldset >
		<legend>Cambiar Contraseña</legend>

		<input type='hidden' name='submitted' id='submitted' value='1'/>

		<div class='short_explanation'>* campos requeridos</div>

		<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
		<div class='container'>
		    <label for='username' >Tu E-mail*:</label><br/>
		    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
		    <span id='resetreq_email_errorloc' class='error'></span>
		</div>
		<div class='short_explanation'>Un Enlace para Cambiar la Contraseña ha sido enviado a tu dirección de E-mail.</div>
		<div class='container'>
		    <input type='submit' name='Submit' value='Submit' />
		</div>

		</fieldset>
		</form>
		<!-- client-side Form Validations:
		Uses the excellent form validation script from JavaScript-coder.com-->

		<script type='text/javascript'>
		// <![CDATA[

		    var frmvalidator  = new Validator("resetreq");
		    frmvalidator.EnableOnPageErrorDisplay();
		    frmvalidator.EnableMsgsTogether();

		    frmvalidator.addValidation("email","req","Please provide the email address used to sign-up");
		    frmvalidator.addValidation("email","email","Please provide the email address used to sign-up");

		// ]]>
		</script>

	</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>