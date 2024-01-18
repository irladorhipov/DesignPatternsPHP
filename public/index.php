<?php

use Patterns\Structural\Decorator\DoubleRoomBooking;
use Patterns\Structural\Decorator\ExtraBed;
use Patterns\Structural\Decorator\WiFi;

require(__DIR__ . '/../vendor/autoload.php');

// classic
$booking = new DoubleRoomBooking();

$viewer = [
    'class'       => get_class($booking),
    'price'       => $booking->calculatePrice(),
    'description' => $booking->getDescription()
];

dump($viewer);

// with extra bed
$booking = new WiFi($booking);

$viewer = [
    'class'       => get_class($booking),
    'price'       => $booking->calculatePrice(),
    'description' => $booking->getDescription()
];

dump($viewer);

// with WiFi + extra bed
$booking = new ExtraBed($booking);

$viewer = [
    'class'       => get_class($booking),
    'price'       => $booking->calculatePrice(),
    'description' => $booking->getDescription()
];

dump($viewer);
