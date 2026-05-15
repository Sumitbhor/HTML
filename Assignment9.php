<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>

<?php
echo "<h1>Welcome</h1>";

// Set timezone (important for correct time)
date_default_timezone_set("Asia/Kolkata");

// Display current date and time
echo "<p>Current Date & Time: " . date("d-m-Y H:i:s") . "</p>";
?>

</body>
</html>