<?php

$daysPerWeek = 7;
$hoursPerDay = 24;
$minutesPerHour = 60;
$minutesPerWeek = $daysPerWeek * $hoursPerDay * $minutesPerHour;
$althoursPerDay = 26;
$altminutesPerWeek = $daysPerWeek * $althoursPerDay * $minutesPerHour;

print "There are $minutesPerWeek minutes in a week.<br />";
print "There are $altminutesPerWeek minutes in a week, in the Bilky Way.";

?>
