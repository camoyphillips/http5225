<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .Card{
      box-sizing: border-box;
      padding: 20px;
      margin: 20px;
      width: 400px;
      height: 300px;
      border: 1px solid black;
      display: inline-block;
    }
    .Secondary{
      background-color: yellow;
    }
    .Other{
      background-color: green !important;
    }
  </style>
</head>
<body>
  <?php
    require('connect.php');
    $query = 'SELECT * FROM schools';
    $schools = mysqli_query($connect, $query);

    //print_r($schools);
    foreach($schools as $school){
      if($school['School Level'] == 'Secondary'){
        echo '<div class="Card Secondary">';
          echo '<h4>';
            echo $school['School Name'];
          echo '</h4>';
        echo '</div>';
      }else{
        echo '<div class="Card Other">';
          echo '<h4>';
            echo $school['School Name'];
          echo '</h4>';
        echo '</div>';
    }
  }
  ?>
</body>
</html>