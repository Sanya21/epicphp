<?php
printf("Меня зовут %s. Мне %d года, то есть %x в шестнадцатиричном представлении", 'Simon', 33, 33);
echo "<br>";
printf("<font color='#%x%x%x'>Привет</font>",  65, 127, 245);
echo "<br>";
printf("Результат: $%.2f\n", 123.42 / 12);
echo "<pre>";
printf("Результат: $%15f\n", 123.42 / 12);
echo "<pre>";
printf("Результат: $%015f\n", 123.42 / 12);
echo "<pre>";
printf("Результат: $%15.2f\n", 123.42 / 12);
echo "<pre>";
printf("Результат: $%015.2f\n", 123.42 / 12);
echo "<pre>";
printf("Результат: $%'#15.2f\n", 123.42 / 12);
echo "<pre>";
$h = 'House';
printf("[%s]\n",          $h);
printf("[%10s]\n",        $h);
printf("[%-10s]\n",       $h);
printf("[%010s]\n",       $h);
printf("[%'#10s]\n",      $h);

$d = 'Doctor House';
printf("[%10.8s]\n",      $d);
printf("[%-10.6s]\n",     $d);
printf("[%-'@10.6s]\n",   $d);

$hexstring = sprintf('#%x%x%x', 65, 127, 245);
echo $hexstring . "<br>";
$out = sprintf("Результат: $%.2f\n", 123.42 / 12);
echo $out;
echo time();
echo time() + 7 * 24 * 60 *60;
echo "<br>";
echo mktime(0, 0, 0, 1, 1, 2000);
echo "<br>";
echo date("l F jS, Y - g:ia",time());
$month = 9;
$day = 31;
$year = 12;
if(checkdate($month, $day, $year)) echo "Допустимая дата";
else echo "Недопустимая дата";
?>