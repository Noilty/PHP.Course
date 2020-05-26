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
     * @return mixed
     */
    public function getImage()
    {
        return 'Изображение ' . $this->image;
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
        return 'Имя: ' . $this->name;
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
        return 'Описание: ' . $this->description;
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
        return 'Гарантия: ' . $this->guarantee;
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
        return 'Страна-производитель: ' . $this->producing_country;
    }

    /**
     * @param mixed $producing_country
     */
    public function setProducingCountry($producing_country): void
    {
        $this->producing_country = $producing_country;
    }
}