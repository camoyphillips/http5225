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

// Get the list of users
$users = getUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List from JSONPlaceholder to Diosplay</title>
</head>
<body>
    <h1>User Information for Display</h1>

    <?php if (!empty($users)): ?>
        <ul>
            <?php foreach ($users as $user): ?>
                <li>
                    <strong>Name:</strong> <?= htmlspecialchars($user['name']) ?><br>
                    <strong>Email:</strong> <?= htmlspecialchars($user['email']) ?><br>
                    <strong>Street:</strong> <?= htmlspecialchars($user['address']['street']) ?><br>
                    <strong>City:</strong> <?= htmlspecialchars($user['address']['city']) ?>
                </li><br>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Can't fetch user data at this time for you.</p>
    <?php endif; ?>
</body>
</html>
