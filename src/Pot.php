<?php

namespace KitchenCounter;

class Pot
{
    private $size;

    public function __construct(int $size = 1)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}
