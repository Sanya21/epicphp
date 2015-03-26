<?php
$title='Coffee';
$description='qwer';
$category ='hot drinks';
$price ='35';
if(isset($_GET['title'])){
    $title = $_GET['title'];
}
if(isset($_GET['description'])){
    $description =$_GET['description'];
}
if(isset($_GET['category'])){
    $category =$_GET['category'];
}
if(isset($_GET['price'])){
    $price =$_GET['price'];
}
echo $title." ".$description." ".$category." ".$price;

