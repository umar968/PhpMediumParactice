<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$jsonarr = array("Name" => "Muhammad Umar", "Age" => 21, "Education" => "Under Graduation");

$jsonobj = json_encode($jsonarr);

echo $jsonobj = '{"Name":"Muhammad Umar","Age":21,"Education":"Under Graduation"}';

echo '<br>' . "Decoding now<br>";

$jsonObj = json_decode(($jsonobj));
$jsonAssociativeArrau = json_decode($jsonobj, true);

echo $jsonObj->Name . '<br>';
echo $jsonObj->Age . '<br>';
echo $jsonObj->Education . '<br>';

var_dump($jsonAssociativeArrau);
