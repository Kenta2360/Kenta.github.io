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
  <div class="container">
    <div class="card w-25 mx-auto bg-light mt-3">
      <div class="card-header text-center">
        <p class="h6">udf-average-act</p>
      </div>
      <div class="card-body text-center">
        <form action="" method="post">
          <input type="number" name="num1" id="" placeholder="First Number" class="form-control mt-1" required>
          <input type="number" name="num2" id="" placeholder="Second Number" class="form-control mt-3" required>
          <input type="submit" name="average" value="Compute" class="btn btn-danger mt-3">
        </form>
      </div>
    </div>
  </div>


  <?php
  if(isset($_POST['average'])){
    $num_1 = $_POST['num1'];
    $num_2 = $_POST['num2'];
    ?>

    <div class="container mt-3">
      <div class=" w-25 mx-auto text-center bg-success text-white fw-bold">
        <p><?= "First Number: " . $num_1 ?></p>
        <p><?= "Second Number: " . $num_2 ?></p>
        <p class="h4"><?= "Average is: " . average($num_1, $num_2) ?></p>
      </div>
    </div>
  <?php
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
function average($num_1, $num_2){
  return ($num_1 + $num_2) / 2;
}
?>