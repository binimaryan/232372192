<!DOCTYPE html>
<html>
<head>
    <title>PHP Currency Converter</title>
</head>
<body>

<form method="post" action="">
    Amount in PHP: <input type="number" name="amount_php" step="any" required><br><br>
    <input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount_php = (float)$_POST['amount_php'];

    $rate_usd = 0.018;
    $rate_eur = 0.016;
    $rate_jpy = 2.45;

    echo "PHP $amount_php to USD: " . round($amount_php * $rate_usd, 2) . "<br>";
    echo "PHP $amount_php to EUR: " . round($amount_php * $rate_eur, 2) . "<br>";
    echo "PHP $amount_php to JPY: " . round($amount_php * $rate_jpy, 2) . "<br>";
}
?>

</body>
</html>
