<?php
setcookie('username', 'Hahaha', time()+60 * 60 * 24 * 7, '/');
if (isset($_COOKIE['username'])) $username = $_COOKIE['username'];
setcookie('username', 'Hahaha', time() - 2592000, '/');
$token = md5('hqb#55my_password');
echo $token;
?>