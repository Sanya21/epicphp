<?php
if (function_exists("array_combine"))
{
    echo "Функция существует <br />";
}
else 
{
    echo "Функция не существует, желательно создать самостоятельно";
}
echo phpversion();
?>