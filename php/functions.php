<?php

declare(strict_types=1);

date_default_timezone_set('Europe/Stockholm');
$time = date("M j h:i");

function storeIsOpen()
{
    $storeSchedule = [
        'Mon' => ['09:00' => '17:00'],
        'Tue' => ['10:00' => '15:00'],
        'Wed' => ['09:00' => '17:00'],
        'Thu' => ['09:00' => '17:00'],
        'Fri' => ['10:00' => '16:00'],
    ];
}

// get current timezone
$timeStamp = time();

// // default status
// $status = 'closed';

// $currentTime = (new DateTime())->setTimestamp($timestamp);

// // loop through time ranges for current day
// foreach ($storeSchedule[date('D', $timestamp)] as $startTime => $endTime) {

//     // create time objects from start/end times
//     $startTime = DateTime::createFromFormat('h:i A', $startTime);
//     $endTime   = DateTime::createFromFormat('h:i A', $endTime);

//     // check if current time is within a range
//     if (($startTime < $currentTime) && ($currentTime < $endTime)) {
//         $status = 'open';
//         break;
//     }
// }

// echo "We are currently: $status";
