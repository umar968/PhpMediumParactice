<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// $readmeFile = fopen("readme.txt", 'r') or die("Not able to open file");

// echo "Before adding text<br>";

// echo fread($readmeFile, filesize("readme.txt"));

// echo "<br>";

// fclose($readmeFile);


$dir = 'fopen';

// create new directory with 744 permissions if it does not exist yet
// owner will be the user/group the PHP script is run under
if (!file_exists($dir)) {
    mkdir($dir, 0744);
}

file_put_contents($dir . '/test.txt', 'fopen');

$readmeFile = fopen("fopen/test.txt", 'w') or die("Cant open file");

$txt = "This is the text that will be added to file.";

fwrite($readmeFile, $txt);
echo "After writting to the file" . '<br>';
echo fread($readmeFile, filesize($readmeFile));

fclose($readmeFile);
