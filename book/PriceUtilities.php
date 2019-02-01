<?php

trait PriceUtilities
{
    private $taxrate = 17;
    public function calculateTax(float $price): float
    {
        return (($this->taxrate / 100) * $price);
    }
    // other utilities
}
