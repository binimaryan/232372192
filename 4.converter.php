<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>

<form method="post" action="">
    Enter temperature in Celsius: <input type="number" name="celsius" step="any" required><br><br>
    <input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celsius = (float)$_POST['celsius'];
    $fahrenheit = ($celsius * 9/5) + 32;
    echo htmlspecialchars($celsius) . "°C is equal to " . htmlspecialchars(round($fahrenheit, 2)) . "°F";
}
?>

</body>
</html>
