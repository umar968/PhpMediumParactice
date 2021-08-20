<?php
$MultiArray = array(
    array('1st Row 1st Column', '1st Row 2nd Column', '1st Row 3rd Column'),
    array('2st Row 1st Column', '2st Row 2nd Column', '2st Row 3rd Column', '2nd Row 4th Column'),
    array('3st Row 1st Column', '3st Row 2nd Column', '3st Row 3rd Column'),
);


for ($i = 0; $i < sizeof($MultiArray); $i++) {
    echo "<br>";
    for ($j = 0; $j < sizeof($MultiArray[$i]); $j++) {
        echo $MultiArray[$i][$j];
        echo " ";
    }
    echo '<br>';
}
