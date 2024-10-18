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
  <div class="card w-25 mx-auto mt-3 text-center">
    <div class="card-header text-center">
      <p>if-else-act</p>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <input type="number" name="num1" id="" placeholder="First Number" class="form-control">
        <input type="number" name="num2" id="" placeholder="Second Number" class="form-control my-3">
        <input type="submit" name="diff" value="Compute" class="btn btn-danger">
      </form>
    </div>
  </div>

  <?php
  if (isset($_POST['diff'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
  ?>

  <div class="card card-body w-25 mx-auto bg-primary">
    <?php
      echo "First Number: ".$num1.
      "<br>Second Number ".$num2.
      "<br>";
      if ($num1 > $num2){
          echo "The Difference is: ".$num1 - $num2;
        }elseif($num1==$num2){
          echo "Same";
        }else{
          echo "The Product is: ".$num1 * $num2;
        }
    ?>
  </div>
<?php
  }
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>