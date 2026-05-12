<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input (comma-separated values)
    $input = $_POST['values'];

    // Convert string into array
    $array = explode(",", $input);

    echo "<h3>Entered Values:</h3>";

    // Display array values
    foreach ($array as $value) {
        echo trim($value) . "<br>";
    }
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Array Input</title>
</head>
<body>

<h2>Enter values (comma separated)</h2>

<form method="post">
    <input type="text" name="values" placeholder="e.g. Apple,Banana,Mango" required>
    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>