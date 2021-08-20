<?php
$cookieName = "UserName";
$cookieValue = 'Umar';
setcookie($cookieName, $cookieValue, time() + (86400 * 30), '/');
?>

<html>

<body>
    <h2>Value of Cookie is: <?php echo $_COOKIE['UserName']; ?></h2>
    <form method="POST" action="Cookie.php">
        <label>Enter the name to be saved as cookie</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="submit" id="submit" />
        <button onclick="<?php setcookie($cookieName, $cookieValue, time() - 40, '/') ?>">Delete Cookie</button>
    </form>
</body>

</html>


<?php
if (isset($_POST['submit'])) {
    $cookieValue = $_POST['name'];
    setcookie($cookieName, $cookieValue, time() + (86400 * 30), '/');
    echo "Now reload the page to see the new set value";
}

?>