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
	   echo '<th>Название эекскурсии</th>';  
	   echo '</tr>';
   	   echo '</thead>';
       echo '<tbody>';
$query=mysql_query("SELECT  title_excursions 
FROM  excursions;");
$row=mysql_fetch_array($query);
do
{
	echo '<tr>';
	echo '<td>' . $row['title_excursions'].'</td>';
	
	}
while ($row=mysql_fetch_array($query));

?> 

	
</div>
</head>
</html>