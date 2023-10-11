<html>
<head>
<link rel="stylesheet" href="l.css">
</head>
<body>
<div class="top">Linux
<div class="fun_red"id="fun_red">
<div class="fun_red"id="fun_orange">
</div>
<div class="fun_red"id="fun_yellow">
</div>
<div class="fun_red"id="fun_lime">
</div>
<div class="fun_red"id="fun_dsb">
</div>
<div class="fun_red"id="fun_blue">
</div>
<div class="fun_red"id="fun_bv">
</div>
</div>
<div class="fun_red"id="fun_red2">
<div class="fun_red"id="fun_orange">
</div>
<div class="fun_red"id="fun_yellow">
</div>
<div class="fun_red"id="fun_lime">
</div>
<div class="fun_red"id="fun_dsb">
</div>
<div class="fun_red"id="fun_blue">
</div>
<div class="fun_red"id="fun_bv">
</div>
</div>
</div>
<div class="content">
<p>Welcome!</p>
<p>Дата обновления: 11.10.2023</p>
<?php
require_once 'connection.php'; // подключаем скрипт
$link = mysqli_connect($controlhost, $controluser, $controlpass, "l") or die("Ошибка " . mysqli_error($link)); 
$query = sprintf("SELECT * FROM Linux");
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
while($row = mysqli_fetch_assoc($result)) {
echo"<p><img class=\"logo\" src=\"".$row["Name"].".png\"></p>";
echo"<h1>".$row["Name"]."</h1>";
echo"<ul>";
echo"<li>Первый выпуск: ".$row["First"]."</li>";
echo"<li>Последняя версия: ".$row["Last"]."</li>";
echo"<li>Сайт: <a href=\"".$row["URL"]."\">".$row["Site"]."</a></li>";
echo"</ul>";
}
mysqli_free_result($result);
mysqli_close($link);
?>
<p><img class="logo" src="ubuntu.png"></p>
<h1>Ubuntu</h1>
<ul>
<li>Первый выпуск: 2004</li>
<li>Последняя версия: 23.04</li>
<li>Сайт: <a href="https://ubuntu.com">ubuntu.com</a></li>
</ul>
<p><img class="logo" src="ubuntu.png"></p>
<h1>Ubuntu</h1>
<ul>
<li>Первый выпуск: 2004</li>
<li>Последняя версия: 23.04</li>
<li>Сайт: <a href="https://ubuntu.com">ubuntu.com</a></li>
</ul>
<p><img class="logo" src="ubuntu.png"></p>
<h1>Ubuntu</h1>
<ul>
<li>Первый выпуск: 2004</li>
<li>Последняя версия: 23.04</li>
<li>Сайт: <a href="https://ubuntu.com">ubuntu.com</a></li>
</ul>
<p><img class="logo" src="ubuntu.png"></p>
<h1>Ubuntu</h1>
<ul>
<li>Первый выпуск: 2004</li>
<li>Последняя версия: 23.04</li>
<li>Сайт: <a href="https://ubuntu.com">ubuntu.com</a></li>
</ul>
<p><img class="logo" src="ubuntu.png"></p>
<h1>Ubuntu</h1>
<ul>
<li>Первый выпуск: 2004</li>
<li>Последняя версия: 23.04</li>
<li>Сайт: <a href="https://ubuntu.com">ubuntu.com</a></li>
</ul>
<p><img class="logo" src="ubuntu.png"></p>
<h1>Ubuntu</h1>
<ul>
<li>Первый выпуск: 2004</li>
<li>Последняя версия: 23.04</li>
<li>Сайт: <a href="https://ubuntu.com">ubuntu.com</a></li>
</ul>
<p><img class="logo" src="ubuntu.png"></p>
<h1>Ubuntu</h1>
<ul>
<li>Первый выпуск: 2004</li>
<li>Последняя версия: 23.04</li>
<li>Сайт: <a href="https://ubuntu.com">ubuntu.com</a></li>
</ul>
<p><img class="logo" src="ubuntu.png"></p>
<h1>Ubuntu</h1>
<ul>
<li>Первый выпуск: 2004</li>
<li>Последняя версия: 23.04</li>
<li>Сайт: <a href="https://ubuntu.com">ubuntu.com</a></li>
</ul>
<p><img class="logo" src="ubuntu.png"></p>
<h1>Ubuntu</h1>
<ul>
<li>Первый выпуск: 2004</li>
<li>Последняя версия: 23.04</li>
<li>Сайт: <a href="https://ubuntu.com">ubuntu.com</a></li>
</ul>
<iframe frameborder="0" style="border:none;width:100%;height:180px;" width="100%" height="180" src="https://music.yandex.ru/iframe/#track/336581/33866">Слушайте <a href='https://music.yandex.ru/album/33866/track/336581'>Computer Love</a> Ч <a href='https://music.yandex.ru/artist/56017'>Kraftwerk</a> на яндекс.ћузыке</iframe>
</div>
<div class="menu">
<div class="menu-button"><a href="/">Главная</a>
<div class="menu-button-hidden"><a href="/">Главная</a></div>
</div>
<div class="menu-button"><a href="/progs.php">Программы</a>
<div class="menu-button-hidden"><a href="/">Главная</a></div>
</div>
<div class="menu-button"><a href="/os.php">ОС</a>
<div class="menu-button-hidden"><a href="/">Главная</a></div>
</div>
<div class="menu-button"><a href="/shells.php">Оболочки</a>
<div class="menu-button-hidden"><a href="/">Главная</a></div>
</div>
</div>
<div class="smm">Button</div>
<div class="bottom">2023</div>
</body>
</html>