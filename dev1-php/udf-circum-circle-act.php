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
  <div class="card w-25 mx-auto text-center mt-3">
    <div class="card-header">
      <h4>Circumference of a Circle</h4>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <input type="number" name="radius" id="" placeholder="Radius" class="form-control">
        <input type="submit" name="circle" value="Submit" class="btn btn-primary mt-3">
    </form>
    </div>
  </div>

  <?php
    if (isset($_POST['circle'])){
      $radius = $_POST['radius'];

      echo "<div class='card card-body mx-auto w-25 bg-light'>
      Circumference ~ " . round(circum($radius), 2);
    }
    ?>

<?php
function circum($radius){
  return 2 * pi() * $radius;
}
?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>