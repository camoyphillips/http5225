<?php
include('functions.php');
secured();
require('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM schools WHERE id = $id";
    $result = mysqli_query($connect, $query);
    $school = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $BoardName = mysqli_real_escape_string($connect, $_POST['BoardName']);
    $SchoolName = mysqli_real_escape_string($connect, $_POST['SchoolName']);

    $query = "UPDATE schools SET `Board Name` = '$BoardName', `School Name` = '$SchoolName' WHERE id = $id";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header('Location: index.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update School</title>
</head>
<body>
  <h1>Update School</h1>
  <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $school['id'] ?>">
    <input type="text" name="BoardName" value="<?= htmlspecialchars($school['Board Name']) ?>" required>
    <input type="text" name="SchoolName" value="<?= htmlspecialchars($school['School Name']) ?>" required>
    <input type="submit" value="Update School" name="UpdateSchool">
  </form>
</body>
</html>