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
<br>
<div class="column middle">  
	<div class="container1">
		<h3>Bem vindo, <?php echo($_SESSION['usu_nome']); ?>!</h3>
	</div>
</div>
</div>
<?php
//Footer
include_once 'includes/footer.php';
?>


