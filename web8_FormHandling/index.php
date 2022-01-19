<form method="post" action="<?php echo
htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<p>Name: <input type="text" name="name" value="<?php
echo $name; ?>"></p>
<p><span class="error"> <?php echo $nameErr; ?></span><br></p>
 <input type="submit" name="submit" value="Submit">
 </form>

 <?php
 // define variables and set to empty values
 $nameErr = "";
 $name = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["name"])) {
 $nameErr = "Name is required";
} else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    $nameErr = "Only letters and white space
   allowed";
    }
    }
    }
    function test_input($data)
    {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>

<?php
 echo "<h2>Your Name:</h2>";
 echo $name;
 echo "<br>";
?>

<style>
 .error {
 color: #FF0000;
 }
</style>