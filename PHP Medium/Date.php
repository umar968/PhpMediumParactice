<?php

echo "Day today is " . Date('l') . '<br>';

echo "Date today is " . Date('d') . '<br>';

echo "This month is " . Date('m') . '<br>';

echo "Year is " . Date('Y') . '<br>';

echo "Full Date today is " . Date('l  d/m/y');

echo '<br>';

echo 'Hour now is ' . Date('h H');

echo '<br>';

echo "Minutes now is " . Date('i');

echo '<br>';

echo 'Full Date and Time are:';

echo '<br>';

echo Date('h-i-s a l  d-m-y ');

echo '<br>';

echo "MKTIME:";

echo '<br>';

$d = mktime(9, 00, 00, 01, 01, 2000);

echo 'Time Stamp' . date('d/m/Y', $d);

echo '<br>';

echo "StringToTime:";

echo '<br>';

$d = strtotime('19 June 2000');

echo Date('d/m/Y', $d);

echo '<br>' . 'Date of Tomorrow : ';

echo date('d/m/Y', strtotime('Tomorrow'));

echo '<br>' . 'Date after two weeks on frinday : ';

echo date('d/m/Y', strtotime('+2 weeks Friday'));

echo "<br>";

echo "Number of days till the start of new year";

$startDate = Date('d/m/Y');
$endDate = mktime(00, 00, 00, 00, 01, 2022);

echo $startDate . '<br> ' . $endDate;
