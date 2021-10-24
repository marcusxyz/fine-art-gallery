<?php

declare(strict_types=1);

// Function for description

function getHeroDescription(string $titleBrand, string $city, int $artworks): string
{
    return "$titleBrand is a fine art gallery in the heart of $city. There's a total of $artworks paintings listed for sale.";
}

// Function for opening hours

date_default_timezone_set('Europe/Stockholm');

$time = date("M j H:i"); // Capital H converts to 24h format

$weekday = date('l');

function StoreOpen(string $weekday)
{
    if ($weekday == "Friday") {
        $open_from = "10:00";
        $open_to = "16:00";
    } elseif ($weekday == "Saturday") {
        $open_from = "11:00";
        $open_to = "15:00";
    } elseif ($weekday == "Sunday") {
        $open_from = "00:00";
        $open_to = "00:00";
    } else {
        $open_from = "09:00";
        $open_to = "17:00";
    }

    if (date("H:i") < $open_from || date("H:i") > $open_to) {
        echo "<span class=\"dot dot-red\"></span>";
        echo "Sorry, we're closed";
    } else {
        echo "<span class=\"dot dot-green\"></span>";
        echo "We're currently open";
    }
}
