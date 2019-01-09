<?
require('header.php');
?>
<!-- Picture Header -->
<header class="masthead" style="background-image: url('image/1500x500.png')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1>Новости НГТУ</h1>
				</div>
			</div>
		</div>
	</div>
</header>

<?
$mysqli = new mysqli("localhost", "root", "", "news");
if ($mysqli->connect_errno) {
		echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli->query("SET NAMES utf8");
$mysqli->query("SET collation_connection = utf8_unicode_ci");

if (news.id > 0)
{
	$news_id = (int) $_GET["news"];
	$res=$mysqli->query(
		"SELECT * 
	FROM news
	ORDER BY n_date DESC 
	LIMIT 10");
}
?>

<?
$news_id = (int) $_GET["news"];

$res = $mysqli->query(
	"SELECT * 
	FROM news
	WHERE news.id=$news_id"); 

while ($row = $res->fetch_assoc()) {
	?><p>
		<div class="container">
			<div class="row"> 
				<div class="col-lg-8 col-md-10 mx-auto">    
					<div class="post-preview">
						<p align="middle"><?=$row["n_pict"]?></p>
						<h2 align="justify"><?=$row["n_name"]?></h2>
						<p align="justify"><?=$row["n_brief"]?></p>
						<p align="justify"><?=$row["n_detail"]?></p>
					</p>
					<?
				}
				?>

 <a class="btn btn-primary" href="index.php">назад</a>
<?
require('footer.php');
?>
