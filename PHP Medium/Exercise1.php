<?php
$browserArray = array("Firefox", "Chrome", "Internet Explorer", "Safari", "Opera", "Other");

class Select
{
    private $name;
    private $value;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setValue($value)
    {
        //Check if it is a array
        if (is_array($value)) {
            $this->value = $value;
        } else {
            die("Value Passed is not Array");
        }
    }
    public function getValue()
    {
        return $this->value;
    }
    private function makeOptions($array)
    {
        //Iterate over the array arguments and create <option>{array values}</option> 
        //It will need to take an array as an argument and iterate over the array key values to produce the options.

        foreach ($array as $value) {
            echo "<option value='{$value}'>";
            echo $value;
            echo "</option>";
        }
    }
    public function makeSelect()
    {
        //     "makeSelect", to create the entire select field. 
        //     This function should call the "makeOptions" function to produce the options. 
        echo "<select name={$this->getName()}>";
        $this->makeOptions($this->getValue());
        echo "</select>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form Exercise 1</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label>Name:</label>
        <input type="text" name="name" />
        <br>
        <label>User Name</label>
        <input type="text" name="username" />
        <br>
        <label>Email</label>
        <input type="email" name="email" />
        <br>
        <label>Select Browser</label>
        <?php
        $browserSelect = new Select();
        $browserSelect->setName("browserSelect");
        $browserSelect->setValue($browserArray);
        $browserSelect->makeSelect();
        ?>
        <br>
        <input type="submit" />
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $selectedBrowser = $_POST['browserSelect'];

    echo "Name: $name <br>";
    echo "Username: $username <br>";
    echo "Email : $email <br>";
    echo "Selected Browser : $selectedBrowser <br>";
}

?>