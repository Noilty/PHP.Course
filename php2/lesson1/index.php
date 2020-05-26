<?php
include 'Phone.php';

$product = new Product(
    'Image product 1',
    'Name product 1',
    'Desc product 1',
    97,
    'Германия'
);

$phone = new Phone(
    'Image phone 1',
    'Name phone 1',
    'Desc phone 1',
    12,
    'Китай',
    2
);

echo $product->getInfo();
echo '<hr />';
echo $phone->getInfo();
