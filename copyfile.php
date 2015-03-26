<?php
if(!copy('testfile.txt', 'testfile2.txt'))  echo ("Копирование невозможно");
else echo "Файл успещно скопирован в testfile2.txt";
?>