<?php
$controlhost = 'localhost'; // ����� ������� 
$database = 'Linux'; // ��� ���� ������
$controluser = 'root'; // ��� ������������
$controlpass = ''; // ������
$link = mysqli_connect($controlhost, $controluser, $controlpass) or die("������ " . mysqli_error($link));
$db=mysqli_select_db($link,'l');
?>