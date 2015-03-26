<?php
$fh = fopen("testfile.txt", 'r') or die("Файл не существует или вы не обладаете правами на его открытие");
//$line = fgets($fh);
$text = fread($fh, 3);
fclose($fh);
//echo $line;
echo $text;
?>