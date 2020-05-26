<?php

/**
 * Class PiecePhysicalGoods / Штучный физический товар
 */

class PiecePhysicalGoods extends DigitalProduct
{
    public function getPrice()
    {
        return parent::PRICE * 2;
    }

    public function totalCost()
    {
        return $this->getPrice() * parent::getAmount();
    }

    public function profitCalc()
    {
        return $this->totalCost() / 100 * parent::PROFIT;
    }
}