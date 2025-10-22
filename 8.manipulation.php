<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>

<form method="post" action="">
    Enter a sentence: <br>
    <textarea name="sentence" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Analyze">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sentence = htmlspecialchars($_POST['sentence']);

    echo "Number of characters: " . strlen($sentence) . '<br>';
    echo "Number of words: " . str_word_count($sentence) . '<br>';
    echo "Uppercase: " . strtoupper($sentence) . '<br>';
    echo "Lowercase: " . strtolower($sentence) . '<br>';
}
?>

</body>
</html>