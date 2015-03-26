<?php
function longdate($timestamp)
{
    $temp = date("F jS Y",$timestamp);
    return "Дата: $temp";
}
echo longdate(time());
?>


