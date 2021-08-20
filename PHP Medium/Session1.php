<?php

echo "Here we will set all the session variables";

session_start();

$_SESSION['Name'] = 'Muhammad Umar';

$_SESSION['Age'] = 21;

echo "Session variables are set.";

header('location:Session2.php');
