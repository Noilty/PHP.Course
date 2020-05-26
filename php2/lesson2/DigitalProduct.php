<?php

/**
 * Class DigitalProduct / Цифровой товар
 */

class DigitalProduct extends Base
{
    const PRICE = 100;
    // Количество товаров
    private $amount;

    public function __construct($amount)
    {
        $this->setAmount($amount);
    }

    public function totalCost()
    {
        return self::PRICE * $this->amount;
    }

    public function profitCalc()
    {
        return self::PRICE * $this->amount / 100 * parent::PROFIT;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }
}