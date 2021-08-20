<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data" action="FileUpload.php">
        <label for="fileUpload">Select a file to upload</label>
        <input type="file" name="file" id="file" />
        <input type="submit" name="submit" id="submit" />
    </form>
</body>

</html>



<?php

if (isset($_POST['submit'])) {
    echo "Name of the file is : ";
    echo $_FILES['file']['name'] . '<br>';
    echo "Extension of the file is : ";
    echo pathinfo(basename($_FILES['file']['name']), 'PATHINFO_EXTENSION');
}

?>