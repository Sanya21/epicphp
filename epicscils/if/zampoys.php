<?php
$a = 4;
$b = 5;
$c = 2;
$d = max($a,$b,$c);
if($a <= $b && $b <= $c)
{
    $a = $a * $a;
    $b = $b * $b;
    $c = $c * $c;
    echo $a . "<br>" . $b . "<br>" . $c;
}
elseif($a > $b && $b > $c)
{
    $a = $d;
    $b = $d;
    $c = $d;
    echo $a . "<br>" . $b . "<br>" . $c;
}
else 
    {
    $a = $a * (-1);
    $b = $b * (-1);
    $c = $c * (-1);
    echo $a . "<br>" . $b . "<br>" . $c;
    }