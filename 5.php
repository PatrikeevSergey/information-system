﻿<html>
<head>
<title>test</title>
<link href="CSS/style1.css" type="text/css" rel="stylesheet">
<div id="content">
<?php
	include('bd_conect.php');
	  echo '<table border="1" id="table">';
	   echo '<thead>';
	   echo '<tr>';
	   echo '<th>Фамилия</th>';
	   echo '<th>Имя</th>';
	   echo '<th>Отчество</th>';
	   echo '<th>Название экскурсии</th>';
   	   echo '</thead>';
       echo '<tbody>';
$query=mysql_query("SELECT last_name, name, pantonymic, title_excursions
FROM tur, excursions
WHERE tur.id_turista = excursions.id_turista;");
$row=mysql_fetch_array($query);
do
{
	echo '<tr>';
	echo '<td>' . $row['last_name'].'</td>';
	echo '<td>' .$row['name']. '</td>';
	echo '<td>' .$row['pantonymic']. '</td>';
	echo '<td>' . $row['title_excursions'].'</td>';

	}
while ($row=mysql_fetch_array($query));

?> 

	
</div>
</head>
</html>