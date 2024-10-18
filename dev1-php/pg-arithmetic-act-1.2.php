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
  <div class="container-fluid">
    <div class="card bg-light w-25 mx-auto my-3">
      <div class="card-header">
        <p class="text-center h6 my-1">pg-aruthmetic-act</p>
      </div>
      <div class="card-body text-center">
        <form action="" method="post">
          <input type="number" name="num1" id="" placeholder="First Number" class="form-control my-1" required>
          <input type="number" name="num2" id="" placeholder="Second Number" class="form-control my-3" required>
          <input type="submit" name="arithmetic" value="compute" class="btn btn-primary mt-3">
        </form>
      </div>
    </div>
  </div>

  <?php
      if(isset($_POST['arithmetic'])){
        $num_1 = $_POST['num1'];
        $num_2 = $_POST['num2'];
        $sum   = $num_1 + $num_2;
        $dif   = $num_1 - $num_2;
        $pro   = $num_1 * $num_2;
        $quo   = $num_1 / $num_2;
  ?>
       
          <div class="card card-boby w-25 mx-auto text-center bg-primary">
            <table class="table text-white">
              <thead class="table-bordered table-dark">
                <tr>
                  <th>First Number</th>
                  <th>Second Number</th>
                <tr>
                  <th><?= $num_1 ?></th>
                  <th><?= $num_2 ?></th>
                </tr>
              </thead>
              <tr>
                <td class="py-2">The sum is</td>
                <td class="py-2"><?= $sum ?></td>
              </tr>
              <tr class="border-bottom">
                <td class="py-2">The difference is</td>
                <td class="py-2"><?= $dif ?></td>
              </tr>
              <tr class="border-bottom">
                <td class="py-2">The product is</td>
                <td class="py-2"><?= $pro ?></td>
              </tr>
              <tr class="border-bottom">
                <td class="py-2">The quotient is</td>
                <td class="py-2"><?= $quo ?></td>
              </tr>
            </table>
          </div>
      <?php
      }
      ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>