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
	   echo '<th>Обслуживание самолета</th>';
	   echo '<th>Стоимость номера</th>';
	   echo '<th>Стоимость экскурсии(если заказана)</th>';
	   echo '<th>Стоимость визы</th>';  
	   echo '</tr>';
   	   echo '</thead>';
       echo '<tbody>';
$query=mysql_query("SELECT Service_plane, price_hotel, price_excursions,price_vise
FROM  price;");
$row=mysql_fetch_array($query);
do
{
	echo '<tr>';
	echo '<td>' . $row['Service_plane'].'</td>';
	echo '<td>' . $row['price_hotel'].'</td>';
	echo '<td>' . $row['price_excursions'].'</td>';
	echo '<td>' . $row['price_vise'].'</td>';
	
	}
while ($row=mysql_fetch_array($query));
?> 

	
</div>
</head>
</html>