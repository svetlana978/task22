<?php

//Для подключения PDO 
// $db = new PDO("mysql:host=$host;dbname=$db", $user, $password);

$host = 'localhost';
$user_enter = 'root';
$password_enter = '';
$dbName = 'test';

$link = mysqli_connect($host, $user_enter, $password_enter, $dbName)
    or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$log = $_POST['login'];
$passw = $_POST['password'];

$query = "SELECT * FROM users WHERE login = '$log' and password = '$passw'";

$result = mysqli_query($link, $query) or die(mysqli_error($link));
//$user = mysqli_fetch_assoc($result);

if (mysqli_fetch_assoc($result) != NULL) header(" Location: http://localhost:8080/23.2/db_users.php ");
else { 
    //echo 'Authorization was successful! ';
    //var_dump($user);
    //include 'db_users.php'; 
     echo 'This users does not exist! Check your login and password';
}
?>

<form method="post">
  <p>Ваш логин: 
    <input type="text" name="login" />
  </p>
  <p>Ваш пароль: 
    <input type="text" name="password" />
  </p>
    <input type="submit" value="отправить">
    </form>