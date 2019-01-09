<? require ('header_adm.php'); ?>

<form method="post" action="connect_adding.php" style="margin-left: 30px;">
	<h5>Заголовок:</h5>
		<textarea name="n_name" cols="80" ></textarea>
		<h6>Краткое описание:</h6>
		<textarea name="n_brief" cols="80" ></textarea>
		<h6>Детальное описание:</h6>
		<textarea name="n_detail" cols="80" ></textarea>
		<h6>Картинка<small> (код html)</small>: </h6>
		<textarea name="n_pict" cols="80" ></textarea>
	</p>
	<input type="submit" class="buttons" name="go_add"  id="submit" value="Отправить">
</form>
</div> <!-- close content-wrapper -->
<? require('footer.php'); ?>