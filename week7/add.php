<?php
include('functions.php');
secured();

if (isset($_POST['AddSchool'])) {
    $BoardName = mysqli_real_escape_string($connect, $_POST['BoardName']);
    $SchoolName = mysqli_real_escape_string($connect, $_POST['SchoolName']);

    require('connect.php');
    $query = "INSERT INTO schools (`Board Name`, `School Name`) VALUES ('$BoardName', '$SchoolName')";
    $school = mysqli_query($connect, $query);

    if ($school) {
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
  <title>Add School</title>
</head>
<body>
  <h1>Add a School</h1>
  <form action="add.php" method="POST">
    <input type="text" name="BoardName" placeholder="Board Name" required>
    <input type="text" name="SchoolName" placeholder="School Name" required>
    <input type="submit" value="Add School" name="AddSchool">
  </form>
</body>
</html>