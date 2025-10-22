<!DOCTYPE html>
<html>
<head>
    <title>Rectangle Calculator</title>
</head>
<body>

<form method="post" action="">
    Length: <input type="number" name="length" step="any" required><br><br>
    Width: <input type="number" name="width" step="any" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = (float)$_POST['length'];
    $width = (float)$_POST['width'];

    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "Area: $area<br>";
    echo "Perimeter: $perimeter<br>";
}
?>

</body>
</html>
