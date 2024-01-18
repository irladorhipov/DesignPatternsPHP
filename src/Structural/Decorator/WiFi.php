<?php 

namespace Patterns\Structural\Decorator;

use Patterns\Structural\Decorator\BookingDecorator;

class WiFi extends BookingDecorator
{
    public const PRICE = 2;

    public function calculatePrice(): int 
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string 
    {
        return $this->booking->getDescription() . ' with WiFi';
    }
}