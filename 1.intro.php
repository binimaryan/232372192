<!DOCTYPE html>
<html>
<head>
    <title>User Info</title>
</head>
<body>

<form method="post" action="">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    Favorite Color: <input type="text" name="favorite_color" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs to prevent XSS attacks
    $name = htmlspecialchars($_POST['name']);
    $age = (int)$_POST['age'];
    $favorite_color = htmlspecialchars($_POST['favorite_color']);

    echo "Hi, I'm $name, I am $age years old, and my favorite color is $favorite_color.";
}
?>

</body>
</html>
