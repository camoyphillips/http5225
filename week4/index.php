<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quirky Zoo Management System</title>
</head>
<body>
    <h1>The Quirky Zoo Management System!</h1>

    <?php
    // Get the current hour in 24-hour format
    $hour = date("G"); // 0–23

    // Display the current time in 12-hour format with AM/PM
    echo "<p>Current Time: " . date("g:i A") . "</p>";

    // Feeding schedule logic for breakfast, lunch, and dinner
    if ($hour >= 5 && $hour < 9) {
        echo "<p><strong>Breakfast time.</strong></p>";
        echo "<p>Meal: Bananas, Apples, and Oats</p>";
    } elseif ($hour >= 12 && $hour < 14) {
        echo "<p><strong>Lunch time.</strong></p>";
        echo "<p>Meal: Fish, Chicken, and Vegetables</p>";
    } elseif ($hour >= 19 && $hour < 21) {
        echo "<p><strong>Dinner time.</strong></p>";
        echo "<p>Meal: Steak, Carrots, and Broccoli</p>";
    } else {
        echo "<p><strong>The animals are not being fed at this moment.</strong></p>";
    }
    ?>
</body>
</html>
