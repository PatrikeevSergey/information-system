<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Запросы</title>
<meta http-equiv ="Content-Type" content=text/html; charset="utf-8" />
<meta name="author" content="Сергей Патрикеев">
</head>
<body>
<?php
include('1.php');
$query=mysql_query("SELECT * FROM tur WHERE id_туриста='8'");
$row=mysql_fetch_array($query);
echo $row['Имя'];
echo "<br />";
echo $row['Фамилия'];
echo "<br />";
echo $row['Дата Рождения'];


?>
</body>
</html>