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
	   echo '<th>Фамилия, Имя, Отчество туриста</th>';
	   echo '<th>Цена визы</th>';
	   echo '<th>Цена билета</th>';
	   echo '<th>Цена гостиницы</th>';
	   echo '<th>Дата вылета</th>';
	   echo '<th>Дата прилета</th>';
	   echo '<th>Страна куда направляется</th>';
	   echo '<th>Город, из которого отправляется</th>';  
	   echo '</tr>';
   	   echo '</thead>';
       echo '<tbody>';
$query=mysql_query("SELECT last_name, name, pantonymic, price_vise, price_bilet, price_hotel, departure_date, date_prilet, country, city
FROM  tur, price, bilet
WHERE tur.id_turista = bilet.id_turista and tur.id_turista = price.id_turista;");
$row=mysql_fetch_array($query);
do
{
	echo '<tr>';
	echo '<td>' . $row['last_name']. $row['name'].$row['pantonymic'].'</td>';
	echo '<td>' . $row['price_vise'].'</td>';
	echo '<td>' . $row['price_bilet'].'</td>';
	echo '<td>' . $row['price_hotel'].'</td>';
	echo '<td>' . $row['departure_date'].'</td>';
	echo '<td>' . $row['date_prilet'].'</td>';
	echo '<td>' . $row['country'].'</td>';
	echo '<td>' . $row['city'].'</td>';
	
	}
while ($row=mysql_fetch_array($query));
?> 

	
</div>
</head>
</html>