<?
require('header.php');
?>

<?
if(isset($_POST['n_login']) && isset($_POST['n_password'])) {
    $username = $_POST['n_login'];
    $password = $_POST['n_password'];
if ($res = $mysqli->prepare("SELECT count(*) FROM users WHERE u_login=? AND u_password =?"))
{
    $res->bind_param("ss", $username,$password);

    /* запускаем запрос */
    $res->execute();

     /*связываем переменные с результатами запроса*/
    $res->bind_result($result);

    /* получаем значения */
    $res->fetch();
    /* закрываем запрос */
    $res->close();
}
if ($result !=1) { 
      echo 'Логин или пароль неверны!';
    }
    else header("Location: adm.php"); 
}
?>

<?
require('footer.php');
?>