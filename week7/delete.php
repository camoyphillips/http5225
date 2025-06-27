<?php
require('connect.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']); 

    
    $query = "DELETE FROM schools WHERE id = $id";

    
    $result = mysqli_query($connect, $query);

    if ($result) {
        
        header('Location: index.php');
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($connect);
    }
} else {
    echo "Invalid request.";
}
?>