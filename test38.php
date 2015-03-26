<?php
$temp = "Дата: ";
echo longdate($temp,time());
function longdate($text,$timestamp)
{
    return $text . date("F jS Y", $timestamp);
}
function test()
{
    static $count = 0;
    echo $count;
    $count++;
}
echo test();
?>

