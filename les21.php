<?php
$input = 'World';
if(isset($_GET['name']))
{
    $input =$_GET['name'];
}
echo "Hello,".htmlspecialchars($input);
