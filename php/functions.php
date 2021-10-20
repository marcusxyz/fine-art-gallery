<?php

declare(strict_types=1);

date_default_timezone_set('Europe/Stockholm');


$time = date("M j H:i"); // Capital H converts to 24h format

$weekday = date('l');



function StoreOpen(string $weekday)
{
    // https://stackoverflow.com/questions/17974888/opening-hours-in-php

    if ($weekday == "Friday") {
        $open_from = "10:00";
        $open_to = "16:00";
    }
    if ($weekday == "Saturday") {
        $open_from = "11:00";
        $open_to = "15:00";
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
