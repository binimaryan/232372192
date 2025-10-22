<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>

<form method="post" action="">
    CIT6 Score: <input type="number" name="cit6" min="0" max="100" required><br><br>
    CIT17 Score: <input type="number" name="cit17" min="0" max="100" required><br><br>
    CC17 Score: <input type="number" name="cc17" min="0" max="100" required><br><br>
    <input type="submit" value="Calculate Grade">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assign POST values to variables matching the form inputs
    $cit6 = (float)$_POST['cit6'];
    $cit17 = (float)$_POST['cit17'];
    $cc17 = (float)$_POST['cc17'];

    // Calculate average correctly using the variables
    $average = ($cit6 + $cit17 + $cc17) / 3;

    if ($average >= 90) {
        $grade = "Passed";
    } elseif ($average >= 80) {
        $grade = "Passed";
    } elseif ($average >= 74) {
        $grade = "Failed";
    } elseif ($average >= 60) {
        $grade = "Failed";
    } else {
        $grade = "F";
    }

    echo "Average score: " . round($average, 2) . " Grade: $grade";
}
?>

</body>
</html>
