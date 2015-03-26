<?php
$products =[
    [
        'title' => 'Плюшевый динозавр',
        'category' => 'Игрушка',
        'descriotion' => 'бла бла бла',
        'price' => '500',
        'country' => 'Китай',
    ],
    ['title' => 'Плюшевый динозавр',
        'category' => 'Игрушка',
        'descriotion' => 'бла бла бла',
        'price' => '500',
        'country' => 'Китай',],
    ['title' => 'Плюшевый динозавр',
        'category' => 'Игрушка',
        'descriotion' => 'бла бла бла',
        'price' => '500',
        'country' => 'Китай',],
    ['title' => 'Плюшевый динозавр',
        'category' => 'Игрушка',
        'descriotion' => 'бла бла бла',
        'price' => '500',
        'country' => 'Китай',],
];
var_dump($products);
foreach ($products as $key =>$product){
    var_dump($product);
}
foreach($products as $key =>$product)
{
    $temp = $products['description'];
    $product['description'] = $product['price'];
    $product['price'] = $product['title'];
    $product['title'] = $temp;
    $products[$key] = $product;
}


