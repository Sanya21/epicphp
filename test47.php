<?php
$page = "abracadabra";
//$fuel = 3;
$fuel = 0.5;
switch ($page):
Case  "Home": echo "Вы выбрали Home"; 
    break;
Case "About": echo "Вы выбрали About";
    break;
Case "News": echo "Вы выбрали News";
    break;
Case "Login": echo "Вы выбрали Login";
    break;
Case "Links": echo "Вы выбрали Links";
break;
default: echo "Нераспознанный выбор";
    break;
endswitch;
echo $fuel <= 1 ? "Требуется дозаправка!" : "Топлива еще достаточно!";
?>
