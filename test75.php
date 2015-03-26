<?php
if(!unlink('testfile2.new'))  echo ("Удаление невозможно");
else echo "Файл успешно testfile2.new удален";
?>