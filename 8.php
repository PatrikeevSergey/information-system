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
	   echo '<th>Название рейса</th>';
	   echo '<th>Место</th>';
	   echo '<th>Дата вылета</th>';
	   echo '<th>Дата прилета</th>';
	   echo '<th>Фамилия, имя, отчество туриста</th>';   
	   echo '</tr>';
   	   echo '</thead>';
       echo '<tbody>';
$query=mysql_query("SELECT last_name, name, pantonymic, mesto, departure_date, date_prilet, name_reis
FROM  tur, bilet
WHERE tur.id_turista = bilet.id_turista;");
$row=mysql_fetch_array($query);
do
{
	echo '<tr>';
	echo '<td>' . $row['name_reis'].'</td>';
	echo '<td>' . $row['mesto'].'</td>';
	echo '<td>' . $row['date_prilet'].'</td>';
	echo '<td>' . $row['departure_date'].'</td>';
	echo '<td>' . $row['last_name']. $row['name']. $row['pantonymic'].'</td>';
	
	}
while ($row=mysql_fetch_array($query));
?> 

	
</div>
</head>
</html>