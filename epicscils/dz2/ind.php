<?php
require_once 'indeks.php';
 
$page = isset($_GET['page']) ? $_GET['page'] : 'main2';

if ($page == 'katalog') {
    require_once 'katalog.php';
} elseif ($page == 'kartochka') {
    require_once 'kartochka.php';
} 
elseif ($page == 'information'){
    require_once 'information.php';
}
else require_once 'main2.php';