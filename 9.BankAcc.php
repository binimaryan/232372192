<!DOCTYPE html>
<html>
<head>
    <title>Bank Balance Update</title>
</head>
<body>

<form method="post" action="">
    Initial Balance: <input type="number" name="balance" step="any" required><br><br>
    Deposit Amount: <input type="number" name="deposit" step="any" required><br><br>
    Withdrawal Amount: <input type="number" name="withdraw" step="any" required><br><br>
    <input type="submit" value="Update Balance">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $balance = (float)$_POST['balance'];
    $deposit = (float)$_POST['deposit'];
    $withdraw = (float)$_POST['withdraw'];

    $balance = $balance + $deposit - $withdraw;

    echo "Updated balance: $balance";
}
?>

</body>
</html>
