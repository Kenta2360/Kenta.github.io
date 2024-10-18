<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table{
      border: 1px solid black;
    }
    td{
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <?php
  echo "<table class='border'>";

  for ($i = 1; $i <= 10; $i++){

    echo "<tr>";

    for($j = 1; $j <= 10; $j++){
      echo "<td>". $i * $j;
    }
  }
  ?>
</body>
</html>