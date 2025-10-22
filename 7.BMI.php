<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
</head>
<body>

<form method="post" action="">
    Weight (kg): <input type="number" name="weight" step="any" required><br><br>
    Height (meters): <input type="number" name="height" step="any" required><br><br>
    <input type="submit" value="Calculate BMI">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weight = (float)$_POST['weight'];
    $height = (float)$_POST['height'];

    if ($height > 0) {
        $bmi = $weight / ($height * $height);
        echo "BMI: " . round($bmi, 2);
    } else {
        echo "Height must be greater than zero.";
    }
}
?>

</body>
</html>
