<?php
include 'Phone.php';

$phone1 = new Product(
    'Image phone 1',
    'Name phone 1',
    'Desc phone 1',
    12,
    'Китай'
);

$phone2 = new Phone(
    'Image phone 1',
    'Name phone 1',
    'Desc phone 1',
    12,
    'Китай',
    2
);

echo $phone2->getCountSim();
