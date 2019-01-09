<? require ('header_adm.php'); ?>

<?
$mysqli = new mysqli("localhost", "root", "", "news");
if ($mysqli->connect_errno) {
  echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli->query("SET NAMES utf8");
$mysqli->query("SET collation_connection = utf8_unicode_ci");

if(isset($_POST['go_add']))
{
	if (isset($_POST['n_name'])) {
		$n_name = $_POST['n_name']; if ($n_name == '') {unset($n_name);}
	}
	if (isset($_POST['n_date'])){
		$n_date = $_POST['n_date']; if ($n_date == '') {unset($n_date);}
	}
	if (isset($_POST['n_brief'])){ 
		$n_brief = $_POST['n_brief']; if ($n_brief == '') {unset($n_brief);}
	} 
	if (isset($_POST['n_detail'])){
		$n_detail = $_POST['n_detail']; if ($n_detail == '') {unset($n_detail);}
	}
	if (isset($_POST['id'])){
		$id = $_POST['id'];
	}
	if (isset($_POST['n_pict'])) {
	$n_pict = $_POST['n_pict']; if ($n_pict == '') {unset($n_pict);}
	}
	if ($_POST['n_name']!="" && $_POST['n_date']!="" && $_POST['n_brief']!="" && $_POST['n_pict']!="")
	{
	   
	}
	$query = "INSERT INTO news SET n_name='".$n_name."', n_brief='".$n_brief."', n_detail='".$n_detail."', n_pict='".$n_pict."' ";
	if ($mysqli->query($query)){
		echo "Новость успешно добавлена!
		<br><a href='add_news.php'>Добавить ещё</a>
		<br><a href='index.php'>На главную</a>";
	}
} 
	?>
	<? require('footer.php'); ?>