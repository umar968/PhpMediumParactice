<?php

$arr = array(1, 3, 4, 5);

$sum = 0;
array_map(function ($elem) {
    global $sum;
    $sum += $elem;
}, $arr);

echo $sum;
