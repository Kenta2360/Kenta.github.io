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
  <div class="container mx-auto w-25 bg-light mt-5">
    <form action="" method="post">
      <p class="text-center">pg-sum-act</p>
      <input type="number" class="form-control my-3" id="first-number" name="first_number" placeholder="First Number">
      <input type="number" class="form-control " id="second-number" name="second_number" placeholder="Second Number">
      <button type="submit" value="Compute" name="compute" class="btn btn-primary w-100 mt-3">Compute</button>
    </form>
  </div>

  <?php
  if (isset($_POST['compute'])){
    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];
    $sum = $first_number + $second_number;

    echo "
          <div class='alert alert-success text-center mx-auto mt-3 w-25'>
          <strong> Result:  </strong>
          First Number: $first_number<br>
          Second_number: $second_number<br>
          The sum is: $sum
    ";
      }else{


        }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>