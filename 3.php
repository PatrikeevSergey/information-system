<html>
<head>
<title>test</title>
<link href="CSS/style1.css" type="text/css" rel="stylesheet">
<div id="content">
<?php
	include('bd_conect.php');
	/*echo '<table border="1">';
	   echo '<thead>';
	   echo '<tr>';
	   echo '<th>Фамилия</th>';
	   echo '<th>Имя</th>';
	   echo '<th>Отчество</th>';
	   echo '<th>Серия паспорта</th>';
	   echo '<th>Номер паспорта</th>';
	   echo '<th>Пол</th>';
	   echo '<th>Дата Рождения</th>';	   
	   echo '</tr>';
   	   echo '</thead>';
       echo '<tbody>';*/
$query=mysql_query("SELECT last_name, name, pantonymic,  date_prilet 
FROM tur, bilet WHERE tur.id_turista = bilet.id_turista AND 
BETWEEN TO_DATE('02-02-2015','DD/MM/YYYY') AND TO_DATE('19-02-2015','DD/MM/YYYY');");
$row=mysql_fetch_array($query); 
do
{ 
	/*echo '<tr>';
	echo '<td>' . $row['last_name'].'</td>';
	echo '<td>' .$row['name']. '</td>';
	echo '<td>' .$row['partonymic']. '</td>';
	echo '<td>' .$row['seria_passport']. '</td>';
	echo '<td>' .$row['number_passport']. '</td>';
	echo '<td>' .$row['pol']. '</td>';
	echo '<td>' .$row['data_of_birth']. '</td>';*/
		echo $row['last_name'];
		echo '</br>';
		echo $row['name'];
		echo '</br>';
		echo $row['pantonymic'];
		echo '</br>';
		echo $row['date_prilet'];
		echo '</br>';
}
while ($row=mysql_fetch_array($query));

?> 
</div>
</head>
</html>