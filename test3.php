<?php
$name='Alex';
echo "Hello,".$name."<br>";
$age = 34;
if($age < 20){
    echo "Все впереди, ".$name."<br>";
}
elseif($age>20 && $age <30){
    echo "Самое время взяться за ум,".$name."<br>";
}
elseif( $age>30){
    echo "У вас есть чему поучиться,".$name."<br>";
}
for($i=0;$i<100;$i++)
{
    if($i%3==0 && $i%5==0){
        echo "FizzBuzz"."<br>";
    }
    elseif($i%3==0){
        echo "Fizz"."<br>";
    }
    elseif($i%5==0){
        echo "Buzz"."<br>";
    }
    else{
        echo $i."<br>";
    }
}
$a=123;
$b=122;
if($a>$b){
    echo "a больше b";
}
elseif($a==$b){
    echo "a равно b";
}
else echo "a  меньше b"."<br>";
$sum=0;
for($c=1;$c<100;$c++)
{
    echo $c."<br>";
    $sum +=$c;
    }
    echo $sum."<br>";
   $gor=11;
   $ver=11;
   $string=0;
   for($f=1;$f<$gor;$f++)
    {
    for($d=1;$d<$ver;$d++)
    {
    $string.=($d*$f);  
     if($d==10){
        $string .= "<br>";
    }
    }
    }
    echo $string;
?>