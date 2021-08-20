<?php
class Bike
{
    public const VehicleType = "BIKE";
    public $CompanyName;
    public $Power;
    private $EngineNumber;

    public function __construct($CompanyName, $Power, $EngineNumber)
    {
        $this->CompanyName = $CompanyName;
        $this->Power = $Power;
        $this->EngineNumber = $EngineNumber;
    }

    public function showInfo()
    {
        echo $this->CompanyName;
        echo "<br>";
        echo $this->Power;
        echo "<br>";
        echo Bike::VehicleType;
    }
    public function __destruct()
    {
        echo "bye bye I am going down Now!!!!";
    }
}

$bike = new Bike("HONDA", "125CC", 'ASLF324');

$bike->showInfo();
