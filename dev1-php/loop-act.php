<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
  <input type="number" name="num1" id="" placeholder="Enter starting number">
  <br>
  <input type="number" name="num2" id="" placeholder="Enter ending number">
  <br>
  <input type="submit" name="result" value="Display">
  </form>
</body>
</html>

<?php
if(isset($_POST['result'])){
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];

  for ($i = $num1; $i <= $num2; $i++){
    echo "$i <br>";
  }
}

?>