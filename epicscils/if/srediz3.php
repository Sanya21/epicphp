<?php
$a = 2;
$b = 4;
$c = 7;
$arg = 0;
if($a == $b || $a==$c )
{
    echo "Ошибка!";
}
elseif ($b == $a || $b == $c)
{
    echo "Ошибка!";
}
elseif($c == $a || $c == $b)
{
    echo "Ошибка!";
}
else $arg = ($a + $b + $c)/3;
echo $arg;