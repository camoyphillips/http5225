<?php
include('functions.php');
secured();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ontario Public Schools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <h1 class="display-4 mt-5 mb-5">All Schools</h1>
  <?php 
    require('connect.php');
    $query = 'SELECT * FROM schools';
    $schools = mysqli_query($connect, $query);
  ?>
  <?php foreach ($schools as $school): ?>
    <p><?= htmlspecialchars($school['School Name']) ?></p>
    <form action="update.php" method="GET">
      <input type="hidden" name="id" value="<?= $school['id'] ?>">
      <input type="submit" value="EDIT">
    </form>
    <form action="delete.php" method="POST">
      <input type="hidden" name="id" value="<?= $school['id'] ?>">
      <input type="submit" value="DELETE">
    </form>
  <?php endforeach; ?>
</body>
</html>
