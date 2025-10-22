<!DOCTYPE html>
<html>
<head>
    <title>Travel Cost Calculator</title>
</head>
<body>

<form method="post" action="">
    Distance (km): <input type="number" name="distance" step="any" required><br><br>
    Fuel Consumption (km per liter): <input type="number" name="fuel_consumption" step="any" required><br><br>
    Fuel Price (per liter): <input type="number" name="fuel_price" step="any" required><br><br>
    <input type="submit" value="Calculate Cost">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distance = (float)$_POST['distance'];
    $fuel_consumption = (float)$_POST['fuel_consumption'];
    $fuel_price = (float)$_POST['fuel_price'];

    if ($fuel_consumption > 0) {
        $liters_needed = $distance / $fuel_consumption;
        $travel_cost = $liters_needed * $fuel_price;

        echo "Estimated travel cost: " . round($travel_cost, 2);
    } else {
        echo "Fuel consumption must be greater than zero.";
    }
}
?>

</body>
</html>
