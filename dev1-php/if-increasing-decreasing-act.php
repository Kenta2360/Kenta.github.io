<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="card w-25 mx-auto text-center">
    <div class="card-header">
      <p>if-increasing-decreasing-act</p>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <input type="number" name="num1" id="" placeholder="First Number" class="form-control">
        <input type="number" name="num2" id="" placeholder="Second Number" class="form-control my-3">
        <input type="number" name="num3" id="" placeholder="Third Number" class="form-control">
        <input type="submit" name="result" value="Check" class="btn btn-danger w-100 mt-3">
      </form>
    </div>
  </div>

<?php
if (isset($_POST['result'])){
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $num3 = $_POST['num3'];

  // echo "<div class='card w-25 bg-secondary text-center text-white py-3 mx-auto'>
  // 1st#: ".$num1."<br>2nd#: ".$num2."<br>3rd#: ".$num3;
  // result($num1, $num2, $num3);
?>

<div class="card w-25 bg-secondary text-center text-white py-3 mx-auto">
  <p><?= "1st#: ".$num1 ?></p>
  <p><?= "2nd#: ".$num2 ?></p>
  <p><?= "3rd#: ".$num3 ?></p>
  <div class="bg-info w-75 mx-auto"><?= result($num1, $num2, $num3) ?></div>
</div>

<?php
}
?>

<?php
  function result($num1, $num2, $num3){
    echo "<div class='bg-info w-75 mx-auto'>";
    if ($num1 > $num2 && $num2 > $num3){
      echo "Decreasing";
    }elseif ($num1 < $num2 && $num2 < $num3){
      echo "Increasing";
    }else{
      echo "Neither";
    }
  }
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>