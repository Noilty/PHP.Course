<?php

/**
 * Class Product
 *
 * Общее описание продукта
 */

class Product
{
    // Изображение
    private $image;
    // Имя
    private $name;
    // Описание
    private $description;
    // Гарантия
    private $guarantee;
    // Страна-производитель
    private $producing_country;

    public function __construct($image, $name, $description, $guarantee, $producing_country)
    {
        $this->setImage($image);
        $this->setName($name);
        $this->setDescription($description);
        $this->setGuarantee($guarantee);
        $this->setProducingCountry($producing_country);
    }

    /**
     * @return string
     */
    public function getInfo() {
        $info = '<b>Изображение:</b> ' . $this->image . '<br />' . PHP_EOL .
                '<b>Имя:</b> ' . $this->name . '<br />' . PHP_EOL .
                '<b>Описание:</b> ' . $this->description . '<br />' . PHP_EOL .
                '<b>Гарантия:</b> ' . $this->guarantee . '<br />' . PHP_EOL .
                '<b>Страна-производитель:</b> ' . $this->producing_country . '<br />' . PHP_EOL;

        return $info;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * @param mixed $guarantee
     */
    public function setGuarantee($guarantee): void
    {
        $this->guarantee = $guarantee;
    }

    /**
     * @return mixed
     */
    public function getProducingCountry()
    {
        return $this->producing_country;
    }

    /**
     * @param mixed $producing_country
     */
    public function setProducingCountry($producing_country): void
    {
        $this->producing_country = $producing_country;
    }
}