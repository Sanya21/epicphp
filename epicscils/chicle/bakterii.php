<?php
$n=10;
$m=1000000;
for($t=1;$t<=10000000;$t++)
{   
    $c=$t*$n*2;
    echo "Время"." ".$t. "ч.- уже есть".$c."<br>";
    if($c>=$m) break;
}