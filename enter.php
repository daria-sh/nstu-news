<head>
  <meta charset="utf-8">  
  <title>Вход</title>
  <link href="adm/bootstrap.min.css" rel="stylesheet">
  <link href="adm/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="adm/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-body">
        <form action="connect_usersdb.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Логин</label>
            <input name="n_login" class="form-control" type="text">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input name="n_password" class="form-control" type="password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Запомнить </label>
            </div>
          </div>
         <input type="submit" name="submit" value="Вход" class="btn btn-primary btn-block"/>          
        </form>
        <div class="text-center">
          <a class="d-block small" href="forgot-password.html">Забыли пароль?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="adm/jquery.min.js"></script>
  <script src="adm/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="adm/jquery.easing.min.js"></script>
</body>

</html>

</br><p align="center"><a class="btn btn-primary" href="index.php">назад</a></p>

<?
require('footer.php');
?>



