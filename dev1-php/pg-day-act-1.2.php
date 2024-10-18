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
    <div class="card w-50 mx-auto my-4">
      <div class="card-header">
        <p class="text-center">pg-day-act</p>
      </div>
      <div class="card-body text-center">
        <form action="" method="post">
          <input type="submit" name="day" value="Monday" class="btn btn-primary">
          <input type="submit" name="day" value="Tuesday" class="btn btn-secondary">
          <input type="submit" name="day" value="Wednesday" class="btn btn-success">
          <input type="submit" name="day" value="Thuesday" class="btn btn-danger">
          <input type="submit" name="day" value="Friday" class="btn btn-warning">
          <input type="submit" name="day" value="Saturday" class="btn btn-dark">
          <input type="submit" name="day" value="Sunday" class="btn btn-info">
        </form>
      </div>
    </div>
  </div>

  <!-- <?php
      if (isset($_POST['day'])){
        $showday = $_POST['day'];
        echo "<div class='card card-body bg-light text-dark text-center mx-auto mt-3 w-50 fw-bold'>$showday</div>";
      }
  ?> -->

  <?php
        if (isset($_POST['day'])){
          $showday = $_POST['day'];
    ?>

  <div class="card card-body bg-light text-dark text-center mx-auto mt-3 w-50 fw-bold">
    <?= $showday ?>
  </div>

  <?php
        }
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>