<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

if(isset($_POST['submitted']))
{
   if($fgmembersite->ChangePassword())
   {
        $fgmembersite->RedirectToURL("changed-pwd.html");
   }
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
      <link rel="STYLESHEET" type="text/css" href="css/pwdwidget.css" />
      <script src="js/pwdwidget.js" type="text/javascript"></script>       
</head>
<body>
<p><a href="settings.html"> Volver a la Configuración </a></p>
<!-- Form Code Start -->
<div id='fg_membersite' class="main-container">
	<form id='changepwd' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
	<fieldset >
	<legend>Cambiar Contraseña</legend>

	<input type='hidden' name='submitted' id='submitted' value='1'/>

	<div class='short_explanation'>* campos requeridos</div>

	<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
	<div class='container'>
	    <label for='oldpwd' >Contraseña Antigua*:</label><br/>
	    <div class='pwdwidgetdiv' id='oldpwddiv' ></div><br/>
	    <noscript>
	    <input type='password' name='oldpwd' id='oldpwd' maxlength="50" />
	    </noscript>    
	    <span id='changepwd_oldpwd_errorloc' class='error'></span>
	</div>

	<div class='container'>
	    <label for='newpwd' >Contraseña Nueva*:</label><br/>
	    <div class='pwdwidgetdiv' id='newpwddiv' ></div>
	    <noscript>
	    <input type='password' name='newpwd' id='newpwd' maxlength="50" /><br/>
	    </noscript>
	    <span id='changepwd_newpwd_errorloc' class='error'></span>
	</div>

	<br/><br/><br/>
	<div class='container'>
	    <input type='submit' name='Submit' value='Enviar' />
	</div>

	</fieldset>
	</form>
	<!-- client-side Form Validations:
	Uses the excellent form validation script from JavaScript-coder.com-->

	<script type='text/javascript'>
	// <![CDATA[
	    var pwdwidget = new PasswordWidget('oldpwddiv','oldpwd');
	    pwdwidget.enableGenerate = false;
	    pwdwidget.enableShowStrength=false;
	    pwdwidget.enableShowStrengthStr =false;
	    pwdwidget.MakePWDWidget();
	    
	    var pwdwidget = new PasswordWidget('newpwddiv','newpwd');
	    pwdwidget.MakePWDWidget();
	    
	    
	    var frmvalidator  = new Validator("changepwd");
	    frmvalidator.EnableOnPageErrorDisplay();
	    frmvalidator.EnableMsgsTogether();

	    frmvalidator.addValidation("oldpwd","req","Por favor proporciona tu Antigua Contraseña");
	    
	    frmvalidator.addValidation("newpwd","req","Por favor proporciona tu Nueva Contraseña");

	// ]]>
	</script>


</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>