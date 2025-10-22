<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations</title>
</head>
<body>

<form method="post" action="">
    Number 1: <input type="number" name="a" required><br><br>
    Number 2: <input type="number" name="b" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];

    echo "Sum: " . ($a + $b) . "<br>";
    echo "Difference: " . ($a - $b) . "<br>";
    echo "Product: " . ($a * $b) . "<br>";

    if ($b != 0) {
        echo "Quotient: " . ($a / $b) . "<br>";
    } else {
        echo "Quotient: Division by zero is not allowed.<br>";
    }
}
?>

</body>
</html>
