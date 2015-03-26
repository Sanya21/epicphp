<?php
require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Невозможно подключиться к MySQL: " . mysql_error());

mysql_select_db($db_database, $db_server)
	or die("Невозможно выбрать базу данных: " . mysql_error());
$query = "CREATE TABLE cats (
    id SMALLINT NOT NULL AUTO_INCREMENT,
    family VARCHAR(32) NOT NULL,
    name VARCHAR(32) NOT NULL,
    age TINYINT NOT NULL, 
    PRIMARY KEY(id))";
$result =  mysql_query($query);
if (!$result) die ("Сбой при доступе к базе данных: " . mysql_error());
    
         