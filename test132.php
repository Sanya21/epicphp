<?php
$username = 'admin';
$password =  'letmein';
if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
    if($_SERVER['PHP_AUTH_USER']== $username && $_SERVER['PHP_AUTH_PW'] == $password)
    echo "Регистрация прошла успешно";
    else die("Неверная комбинация имя пользователя-пароль");
}
else {
    header('WWW-Authenticate: Basic realm="Restricted Section"');
    header('HTTP/1.0401 Unauthorized');
    die("Пожалуйста, введите имя пользователя и пароль");
}
$token = md5('my_password');
echo $token;
?>