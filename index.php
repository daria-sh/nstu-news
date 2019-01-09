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
	$page=(int) $_GET["page"]; 
	$news_count_per_page = 10;
	$start_id = ($page)*$news_count_per_page;
	$end_id = $news_count_per_page;
	$res_on_page = $mysqli->query("SELECT * from news order by n_date desc limit $start_id, $end_id");
?>

<div id="news_column" class="container">
	<? 
	while ($row = $res_on_page->fetch_assoc()) {
		?>	
			<div class="row">
				<p></br><?=$row["n_pict"]?></p>
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="post-preview">
						</br><h3 align="justify"><?=$row["n_name"]?></h3>
						<p align="justify"><?=$row["n_brief"]?></p>
						<a class="btn btn-primary" href="detail.php?news=<?=$row["id"]?>">Читать подробнее</a>
						<p align="right">Опубликовано: <?=date("d.m.y", strtotime($row["n_date"]))?></p>
					</div>
				</div>
			</div>
				<?
		}
		?>

	<? // count of news on page - 10
	$result = $mysqli->query("SELECT count(*) from news");	
	$number_of_page=$result->fetch_row();
	$max_news_count=$number_of_page[0];
	$number_of_page= $max_news_count / $news_count_per_page;
	?>
	<center><div class="clearfix">
		<?
		for ($i = 0; $i <= $number_of_page; $i++) 
		{
			?>
			<a class="btn btn-primary" href="index.php?page=<?=$i?>"> <?=$i+1?> </a>
			<?
		}
		?>
	</div></center>
</div>

<? require('footer.php'); ?>