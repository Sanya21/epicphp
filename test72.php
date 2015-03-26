<?php
if(file_exists("testfile.txt")) echo "Файл существует";
$fh = fopen("testfile.txt", 'w') or die("Создать файл не удалось");
echo "<br>";
$text = 'Alice Sanya';
        fwrite($fh, $text) or die("Сбой записи файла");
        fclose($fh);
        echo "Файл testfile.txt успешно записан";
?>