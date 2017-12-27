<?PHP
	require_once("./include/membersite_config.php");
	$logged = $fgmembersite->CheckLogin();
	if($logged)
	{
		$fgmembersite->savePoints($_POST["points"],$_POST["level"]);
	}
?>