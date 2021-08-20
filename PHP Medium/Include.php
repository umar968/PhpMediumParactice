<?php
include 'Header.php';
echo "Center Body";
require 'Footer.php';

include 'MissingFile.php';

echo 'This will work even after the file is not found';

require 'MissingFile.php';

echo "This will not work after require file is not found";
