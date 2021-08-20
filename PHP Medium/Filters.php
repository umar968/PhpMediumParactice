<?php
$str = "<h1>Filter Sanitize string";
echo $str;
echo filter_var($str, FILTER_SANITIZE_STRING);
echo "<br>";
$val = 10;

if (filter_var($val, FILTER_VALIDATE_INT) === 0 || filter_var($val, FILTER_VALIDATE_INT) === false) {
    echo "not an integer";
} else {
    echo "Integer";
}
echo "<br>";
echo "<br>";

$url = "www.google.com//over/there?name=ferret";

if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo "url with a query string";
} else {
    echo "Not with a query string";
}
