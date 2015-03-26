<?php
$temp = "Дата: ";
echo $temp . longdate(time());
function longdate($timestamp)
{
    return date("F jS Y",$timestamp);
   
}

?>


