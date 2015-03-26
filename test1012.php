<?php
require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Невозможно подключиться к MySQL: " . mysql_error());
mysql_select_db($db_database)
	or die("Невозможно выбрать базу данных: " . mysql_error());

$query = "SELECT * FROM customers";

$result = mysql_query($query);
if (!$result) die ("Сбой при доступе к базе данных: " . mysql_error());
$rows = mysql_num_rows($result);

for ($j = 0 ; $j < $rows ; ++$j)
{
	$row = mysql_fetch_row($result);
        echo "$row[0] purchased ISBN $row[1]:<br />";
        
        $subquery = "SELECT * FROM classics WHERE isbn='$row[1]'";
	$subresult = mysql_query($subquery);
        if (!$subresult) die ("Сбой при доступе к базе данных: " . mysql_error());
        $subrow = mysql_fetch_row($subresult);
        echo "'$subrow[1]' by $subrow[0] <br />";
}

?>