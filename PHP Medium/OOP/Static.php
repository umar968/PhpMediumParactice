<?php

class StaticParactice
{

    public static $PI = 3.14;

    public static function Circumference($radius)
    {
        return 2 * self::$PI * $radius;
    }
}

$firstCircle = new StaticParactice();
echo "Value of PI is :" . StaticParactice::$PI . "<br>";
echo $firstCircle->Circumference(5);
echo "<br>";
echo StaticParactice::Circumference(10);
