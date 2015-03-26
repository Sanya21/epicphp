<?php
$number = 12345 * 67890;
echo substr($number,3,1);
$pi = "3.1415927";
$radius = 5;
echo $pi*($radius * $radius);
function longdate($timestamp)
{
    return date("F jS Y",$timestamp);
}
echo longdate(time());
?>

