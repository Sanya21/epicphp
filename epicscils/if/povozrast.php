<?php
$a = 2;
$b = 1;
$c = 4;
$max = max($a, $b, $c);
$min = min($a, $b, $c);
if($a < $max && $a > $min)
{
    echo $min ." ". $a." ". $max;
}
elseif($b < $max && $b > $min)
{
    echo $min . " ". $b." ". $max;
}
elseif($c < $max && $c > $min)
{
    echo $min . " ". $c. " ". $max;
}
?>