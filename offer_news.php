<? require('header.php'); ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('image/1500x500.png')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="page-heading">
					<h1>Есть интересная новость?</h1>
					<span class="subheading">Заполняй форму и присылай ее! После проверки она будет опубликована на сайт.</span>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<form name="sentMessage" id="contactForm" novalidate>
				<div class="control-group">
					<div class="form-group floating-label-form-group controls">
						<label>Имя и фамилия</label>
						<input type="text" class="form-control" placeholder="Имя и фамилия" id="name" required data-validation-required-message="Please enter your name.">
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="control-group">
					<div class="form-group floating-label-form-group controls">
						<label>Адрес электронной почты</label>
						<input type="email" class="form-control" placeholder="Адрес электронной почты" id="email" required data-validation-required-message="Please enter your email address.">
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="control-group">
					<div class="form-group floating-label-form-group controls">
						<label>Новость</label>
						<textarea rows="5" class="form-control" placeholder="Новость" id="message" required data-validation-required-message="Please enter a message."></textarea>
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<br>
				<div id="success"></div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" id="sendMessageButton">Прислать!</button>
				</div>
			</form>
		</div>
	</div>
</div>
<? require('footer.php'); ?>