<?php

spl_autoload_register(function ($class) {
    include "$class.php";
});

//$text = new GoodsWeight();
//$text->setPrice();

use classes\Test as test;

$a = test::single();
echo $a->getValue();

echo PHP_EOL;

$a->setValue(10);
echo $a->getValue();

echo PHP_EOL;

$b = test::single();
echo $b->getValue();

echo '<hr />';

$dp = new DigitalProduct(3);
echo $dp->profitCalc();

echo '<hr />';

$ppg = new PiecePhysicalGoods(3);
echo $ppg->profitCalc();

echo '<hr />';

$gw = new GoodsWeight(3, 300);
echo $gw->profitCalc();