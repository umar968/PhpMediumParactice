<?php
session_start();
echo "Now here we will reterive information stored in session";

echo $_SESSION['Name'];
echo $_SESSION['Age'];
