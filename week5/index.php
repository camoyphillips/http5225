<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5 - Colors Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .color-box {
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Available Colors</h1>
    <?php
        
        $connect = mysqli_connect('localhost', 'root', 'root', 'colors');

        if (!$connect) {
            die(" Connection Failed: " . mysqli_connect_error());
        }

    
        $query = 'SELECT * FROM colors';
        $colors = mysqli_query($connect, $query);

        if ($colors && mysqli_num_rows($colors) > 0) {
            while ($row = mysqli_fetch_assoc($colors)) {
                $name = htmlspecialchars($row['name']);
                $hex = htmlspecialchars($row['hex']);

                
                if (preg_match('/^#[a-fA-F0-9]{6}$/', $hex)) {
                    echo "<div class='color-box' style='background-color: {$hex};'>
                            {$name} ({$hex})
                          </div>";
                } else {
                    echo "<div class='color-box' style='background-color: #555;'>
                            {$name} (Invalid Hex)
                          </div>";
                }
            }
        } else {
            echo "<p>No color data found.</p>";
        }

        mysqli_close($connect);
    ?>
</body>
</html>