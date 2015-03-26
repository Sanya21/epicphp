<?php
session_start();
if(isset($_SESSION['username']))
{
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    $forename=$_SESSION['forename'];
    $surname=$_SESSION['surname'];
    echo "С возвращением, $forename.<br />
        Ваше полное имя $forename $surname,<br />
        Ваше имя пользователя '$username'
        И ваш пароль '$password'.";
    destroy_session_and_data();
}
else echo "Пожалуйста, для входа <a href=autenthicate2.php>Щелкните здесь</a>";

function destroy_session_and_data()
{
    session_start();
    $_SESSION=array();
    if(session_id() !="" || isset($_COOKIE[session_name()]))
        setcookie (session_name(), '', time()-2592000, '/');
    session_destroy();
}
?>