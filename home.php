<?php
	session_start();
	if(!isset($_SESSION['usu_id']))
	{
		header("location: index.php");
		exit;
	}
// Header
include_once 'includes/header.php';
?>
<div class="column middle">  
	<img id="grafico" src="exemplo.php">
 	<img id="grafico" src="exemplo1.php">
</div>
</div>
<?php
//Footer
include_once 'includes/footer.php';
?>


