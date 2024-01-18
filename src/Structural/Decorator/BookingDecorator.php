<?php

namespace Patterns\Structural\Decorator;

abstract class BookingDecorator implements BookingInterface
{
    protected BookingInterface $booking;

    public function __construct(BookingInterface $booking)
    {
        $this->booking = $booking;
    }
}