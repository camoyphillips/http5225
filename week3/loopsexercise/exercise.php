<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = @file_get_contents($url); 

    if ($data === false) {
        return []; 
    }

    return json_decode($data, true);
}


$users = getUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List from JSONPlaceholder to Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #f4f4f4;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>User Information</h1>

    <?php if (!empty($users)): ?>
        <ul>
            <?php foreach ($users as $user): ?>
                <li>
                    <strong>Name:</strong> <?= htmlspecialchars($user['name']) ?><br>
                    <strong>Email:</strong> <?= htmlspecialchars($user['email']) ?><br>
                    <strong>Street:</strong> <?= htmlspecialchars($user['address']['street']) ?><br>
                    <strong>City:</strong> <?= htmlspecialchars($user['address']['city']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Can't fetch user data at this time. Please try again later.</p>
    <?php endif; ?>
</body>
</html>
