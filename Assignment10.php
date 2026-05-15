<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>

<h2>User Form</h2>

<form method="post">
    
    Name:
    <input type="text" name="name">
    
    <br><br>

    Email:
    <input type="email" name="email">
    
    <br><br>

    <input type="submit" value="Submit">

</form>

<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Store form data into variables
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Display submitted data
    echo "<h2>Form Data Received</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
}

?>

</body>
</html>