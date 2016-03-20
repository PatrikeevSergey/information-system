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
	   echo '<th>Название гостиницы</th>';
	   echo '<th>Номер</th>';
	   echo '<th>Фамилия,имя, отчетво туриста</th>';   
	   echo '</tr>';
   	   echo '</thead>';
       echo '<tbody>';
$query=mysql_query("SELECT last_name, name, pantonymic, title,number
FROM tur, hotel
WHERE tur.id_turista = hotel.id_turista;");
$row=mysql_fetch_array($query);
do
{
	echo '<tr>';
	echo '<td>' . $row['title'].'</td>';
	echo '<td>' .$row['number']. '</td>';
	echo '<td>' .$row['last_name'] . $row['name']. $row['pantonymic'].'</td>';
	}
while ($row=mysql_fetch_array($query));

?> 

	
</div>
</head>
</html>