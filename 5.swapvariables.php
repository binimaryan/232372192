<!DOCTYPE html>
<html>
<head>
    <title>Swap Two Numbers</title>
</head>
<body>

<form method="post" action="">
    Enter value for x: <input type="number" name="x" required><br><br>
    Enter value for y: <input type="number" name="y" required><br><br>
    <input type="submit" value="Swap">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST['x'];
    $y = $_POST['y'];

    echo "Before swapping: x = $x, y = $y<br>";

    // Swapping
    $temp = $x;
    $x = $y;
    $y = $temp;

    echo "After swapping: x = $x, y = $y";
}
?>

</body>
</html>

