<? require('header_adm.php'); ?>
<? require('adm_leftmenu.php'); ?>
<?
	session_start(); 
	if($_GET['do'] == 'logout'){
	unset($_SESSION['admin']);
	session_destroy();
	header("Location: index.php"); 
	}
?>
		<h1 align="center"> Приветствие </h1>
	</div>
<? require('footer.php'); ?>