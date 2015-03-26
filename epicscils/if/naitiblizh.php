<?php
$m=9.2;
$n=7.8;
$a=10;
$b=abs($a-$m);
$c=abs($a-$n);
if($b < $c)
{
    echo $m;
}
else echo $n;
?>