<html>
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
	   echo '<th>Страна, в которой побывал</th>';
	   echo '<th>дата вылета</th>';
	   echo '<th>дата прилета</th>';
	   echo '<th>Название гостиницы</th>';	   
	   echo '</tr>';
   	   echo '</thead>';
       echo '<tbody>';
$query=mysql_query("SELECT last_name, name, pantonymic, country, departure_date, date_prilet, title 
FROM tur, bilet, hotel 
WHERE tur.id_turista = bilet.id_turista and tur.id_hotel = hotel.id_hotel;;");
$row=mysql_fetch_array($query);
do
{
	echo '<tr>';
	echo '<td>' . $row['last_name'].'</td>';
	echo '<td>' .$row['name']. '</td>';
	echo '<td>' .$row['pantonymic']. '</td>';
	echo '<td>' . $row['country'].'</td>';
	echo '<td>' . $row['departure_date'].'</td>';
	echo '<td>' . $row['date_prilet'].'</td>';
	echo '<td>' .$row['title']. '</td>';
	}
while ($row=mysql_fetch_array($query));
?> 
</div>
</head>
</html>