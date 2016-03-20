<?php
$host='localhost';
	$user='new_user';
	$pasw='1234567890';
	$db='evroland';
    
  $connection=mysql_connect($host,$user,$pasw);
if(!$connection||!mysql_select_db($db,$connection))
{
	exit(mysql_error());
}
?>