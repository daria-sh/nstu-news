<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Новостной портал</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="css/clean-blog.min.css" rel="stylesheet">
	<!-- Bootstrap core CSS-->
	<link href="adm/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="adm/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Page level plugin CSS-->
	<link href="adm/dataTables.bootstrap4.css" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="adm/sb-admin.css" rel="stylesheet">
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Меню
			</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
				<a class="nav-link" href="index.php">Главная</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="add_news.php">Войти как администратор</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="offer_news.php">Предложить новость</a>
				</li>
			</ul>
		</div>
		</div>
	</nav>

<?
$mysqli = new mysqli("localhost", "root", "", "news");
if ($mysqli->connect_errno) {
  echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli->query("SET NAMES utf8");
$mysqli->query("SET collation_connection = utf8_unicode_ci");
?>