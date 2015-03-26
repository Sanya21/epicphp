<?php
$fname = "Elizabeth";
$sname = "Windsor";
$address = "Buckingdam Palace";
$city = "London";
$country = "United Kingdom";
$contact = compact('fname', 'sname', 'address', 'city','country');
print_r($contact);
printf("Меня зовут %s. Мне %d года, то есть %x в шестнадцатиричном представлении", 'Simon', 33, 33);
?>