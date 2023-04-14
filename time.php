<?php

// define activities as an associative array with start and end times and activity names
$activities = [
    ['start' => 0, 'end' => 7, 'name' => 'sleep'],
    ['start' => 7, 'end' => 9, 'name' => 'relax'],
    ['start' => 9, 'end' => 13, 'name' => 'code'],
    ['start' => 13, 'end' => 14, 'name' => 'sleep'],
    ['start' => 14, 'end' => 16, 'name' => 'code'],
    ['start' => 16, 'end' => 18, 'name' => 'bugfix'],
    ['start' => 18, 'end' => 19, 'name' => 'relax'],
    ['start' => 19, 'end' => 21, 'name' => 'note'],
    ['start' => 21, 'end' => 22, 'name' => 'relax'],
    ['start' => 22, 'end' => 24, 'name' => 'reading']
];

$current_hour = date('G'); // get the current hour in 24-hour format
$activity = ''; // initialize the activity variable

// loop through activities to find the current activity
foreach ($activities as $act) {
    if ($current_hour >= $act['start'] && $current_hour < $act['end']) {
        $activity = $act['name'];
        break;
    }
}

echo $activity; // output the activity variable
exit;

