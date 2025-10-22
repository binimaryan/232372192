<!DOCTYPE html>
<html>
<head>
    <title>Net Salary Calculator</title>
</head>
<body>

<form method="post" action="">
    Basic Salary: <input type="number" name="basic_salary" step="any" required><br><br>
    Allowance: <input type="number" name="allowance" step="any" required><br><br>
    Deduction: <input type="number" name="deduction" step="any" required><br><br>
    <input type="submit" value="Calculate Net Salary">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $basic_salary = (float)$_POST['basic_salary'];
    $allowance = (float)$_POST['allowance'];
    $deduction = (float)$_POST['deduction'];

    $net_salary = $basic_salary + $allowance - $deduction;

    echo "Net Salary: $net_salary";
}
?>

</body>
</html>
