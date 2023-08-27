<?php
$controlhost = 'localhost'; // адрес сервера 
$database = 'Linux'; // имя базы данных
$controluser = 'root'; // имя пользователя
$controlpass = ''; // пароль
$link = mysqli_connect($controlhost, $controluser, $controlpass) or die("Ошибка " . mysqli_error($link));
$db=mysqli_select_db($link,'l');
?>