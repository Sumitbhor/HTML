<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>

<h2>String Manipulation Program</h2>

<form method="post">
    Enter a string: <input type="text" name="inputString" required>
    <br><br>
    <input type="submit" value="Process">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["inputString"];

    echo "<h3>Results:</h3>";

    // Length of string
    echo "Length of string: " . strlen($str) . "<br>";

    // Reverse string
    echo "Reversed string: " . strrev($str) . "<br>";

    // Substring (first 5 characters)
    echo "Substring (first 5 chars): " . substr($str, 0, 5) . "<br>";

    // Convert to uppercase
    echo "Uppercase: " . strtoupper($str) . "<br>";

    // Convert to lowercase
    echo "Lowercase: " . strtolower($str) . "<br>";
}
?>

</body>
</html>