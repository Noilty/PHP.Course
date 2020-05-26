<?php

namespace Classes;

use traits\SingletonTrait;

class Test
{
    use SingletonTrait;

    private $value = 0;

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }
}