<?php
$cmd = "dir";
exec(escapeshellcmd($cmd),$output,$status);
if($status) echo "Команда exec  не выполнена";
 else
{
     echo "<pre>";
     foreach($output as $line) echo "$line\n";
 }
?>