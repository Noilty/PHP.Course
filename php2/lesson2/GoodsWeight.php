<?php

/**
 * Class GoodsWeight / Товар на вес
 */

class GoodsWeight extends Base
{
    // Цена
    private $price;
    // Вес
    private $weigth;

    public function __construct($price, $weigth)
    {
        $this->setPrice($price);
        $this->setWeigth($weigth);
    }

    public function totalCost()
    {
        return $this->price * $this->weigth;
    }

    public function profitCalc()
    {
        return $this->totalCost() / 100 * parent::PROFIT;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getWeigth()
    {
        return $this->weigth;
    }

    /**
     * @param mixed $weigth
     */
    public function setWeigth($weigth): void
    {
        $this->weigth = $weigth;
    }
}