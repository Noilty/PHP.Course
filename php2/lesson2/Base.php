<?php

/**
 * Class Base
 */

abstract class Base
{
    const PROFIT = 10;

    /**
     * Финальная стоимость
     *
     * @return mixed
     */
    public abstract function totalCost();

    /**
     * Доход получаемый с продажи
     *
     * @return mixed
     */
    public abstract function profitCalc();
}