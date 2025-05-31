<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>What is the Magic Number Game</title>
</head>
<body>

<h1>This is the Magic Number Game</h1>

<form method="post">
    <label for="number">Enter your number:</label>
    <input type="number" name="number" id="number" required>
    <button type="submit">Check now</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = isset($_POST["number"]) ? (int)$_POST["number"] : 0;

    echo "<p>Your magic number is: <strong>";

    if ($number % 3 === 0 && $number % 5 === 0) {
        echo "FizzBuzz";
    } elseif ($number % 3 === 0) {
        echo "Fizz";
    } elseif ($number % 5 === 0) {
        echo "Buzz";
    } else {
        echo htmlspecialchars($number);
    }

    echo "</strong></p>";
}
?>

</body>
</html>
