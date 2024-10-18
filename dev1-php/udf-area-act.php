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
  <div class="card w-25 mx-auto mt-4 text-center">
    <div class="card-header">
      <h5>Area of Rectangle</h5>
    </div>
    <div class="card-body text-center">
      <form action="" method="post">
        <input type="number" name="length" id="" placeholder="Enter Length" class="form-control">
        <input type="number" name="width" id="" placeholder="Enter Width" class="form-control my-3">
        <input type="submit" name="area" value="Compute" class="btn btn-danger">
      </form>
    </div>
  </div>


  <?php
  if (isset($_POST['area'])){
    $length = $_POST['length'];
    $width = $_POST['width'];
  ?>

  <div class="w-25 bg-success text-center mx-auto mt-4 text-white">
    <p><?= "Length: " . $length?></p>
    <p><?= "Width: " . $width?></p>
    <p><?= "Area of Rectangle: " . Area($length, $width) ?></p>
  </div>

<?php
  }
?>

<?php
function Area($length, $width){
  return $length * $width;
}
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>