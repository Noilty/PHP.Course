<?php
include 'Product.php';

/**
 * Class Phone
 *
 * Дополняет общее описание продукта
 */

class Phone extends Product
{
    // Количество SIM-карт
    private $count_sim;

    public function __construct($image, $name, $description, $guarantee, $producing_country, $count_sim)
    {
        parent::__construct($image, $name, $description, $guarantee, $producing_country);
        $this->setCountSim($count_sim);
    }

    /**
     * @return mixed
     */
    public function getCountSim()
    {
        return 'Количество SIM-карт: ' . $this->count_sim;
    }

    /**
     * @param mixed $count_sim
     */
    public function setCountSim($count_sim): void
    {
        $this->count_sim = $count_sim;
    }
}