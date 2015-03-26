<?php
$fh = fopen("testfile.txt", 'r+') or die("Сбой открытия файла");
$text = fgets($fh);
fseek($fh, 18, SEEK_END);
if(flock($fh, LOCK_EX))
{
    fwrite($fh,"$text") or die("Сбой записи в файл");
    flock($fh, LOCK_UN);
}
fclose($fh);
echo "Файл testfile.txt успешно обновлен"
?>
