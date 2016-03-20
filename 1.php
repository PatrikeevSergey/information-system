<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.0 Transitional//EN">
<html>
<head>
<title>test</title>
<meta http-equiv ="Content-Type" content=text/html; charset="utf-8" />
<link href="CSS/style1.css" type="text/css" rel="stylesheet">
<div id="content">
<?php
	include('bd_conect.php');
       echo '<table border="1" id="table">';
	   echo '<thead>';
	   echo '<tr>';
	   echo '<th>Фамилия имя отчество</th>';
	   echo '<th>Серия паспорта</th>';
	   echo '<th>Номер паспорта</th>';
	   echo '<th>Пол</th>';
	   echo '<th>Дата Рождения</th>';	   
	   echo '</tr>';
   	   echo '</thead>';
       echo '<tbody>';
$query=mysql_query("SELECT * FROM tur;");
$row=mysql_fetch_array($query);
do
{
	echo '<tr>';
	echo '<td>' .$row['last_name']. $row['name']. $row['pantonymic'].'</td>';
	echo '<td>' .$row['seria_passport']. '</td>';
	echo '<td>' .$row['number_passport']. '</td>';
	echo '<td>' .$row['pol']. '</td>';
	echo '<td>' .$row['data_of_birch']. '</td>';
		
}
while ($row=mysql_fetch_array($query));

?> 
</div>
</head>
</html>