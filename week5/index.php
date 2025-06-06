<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
</head>
<body>
    <?php
        $connect = mysqli_connect('localhost', 'root', 'root', 'colors');

        if (!$connect) {
            die("Connection Failed: " . mysqli_connect_error());
        }

        $query = 'SELECT * FROM colors';
        $colors = mysqli_query($connect, $query);

        if ($colors && mysqli_num_rows($colors) > 0) {
            while ($row = mysqli_fetch_assoc($colors)) {
                $name = htmlspecialchars($row['name']);
                $hex = htmlspecialchars($row['hex']);

                echo "<div style='background-color: {$hex}; color: white; padding: 10px; margin: 5px; border-radius: 5px;'>
                        {$name} ({$hex})
                      </div>";
            }
        } else {
            echo "<p>No data found.</p>";
        }


        mysqli_close($connect);
    ?>
</body>
</html>
