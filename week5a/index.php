<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Hello, PHP is working.<br>";

$connect = mysqli_connect('localhost', 'root', 'root', 'colours', 3306);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected to DB successfully.<br>";

$query = "SELECT Name, Hex FROM colors";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    echo "Data fetched.<br>";
} else {
    echo "No data or wrong table.<br>";
}

mysqli_close($connect);
?>
