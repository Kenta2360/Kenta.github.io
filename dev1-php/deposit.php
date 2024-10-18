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
    <div class="card w-25 mx-auto my-4">
      <div class="card-header">
        <h1 class="text-center">Deposit Slip</h1>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <input type="date" name="date" id="" class="form-control">
          <input type="number" name="acct_number" id="" placeholder="Account Number..." class="form-control my-3" required>
          <input type="number" name="balance" id="" placeholder="Enter balance..." class="form-control my-3" required>
          <input type="number" name="amount" id="" placeholder="Deposit amount..." class="form-control my-3" required>
          <input type="submit" name="deposit" value="deposit" class="btn btn-primary w-100">
        </form>
      </div>
    </div>
  </div>

  <?php
      if (isset($_POST['deposit'])){ //check wether the form was submitted (check if $_POST['deposit'] is set)
        $acct_number = $_POST['acct_number'];
        $date        = $_POST['date'];
        $balance     = $_POST['balance'];
        $amount      = $_POST['amount'];

  ?>
      <div class="conteiner">
        <div class="border rounded w-25 mx-auto">
          <h1 class="text-center">Deposit Receipt</h1>
          <hr>

          <span class="fw-bold">Date</span>
          <p><?= $date ?></p> <!--echo $date; (display value of date inside a paragraph) -->

          <span class="fw-bold">Account Number</span>
          <p><?= $acct_number ?></p>

          <span class="fw-bold">Balance</span>
          <p><?= $balance ?></p>

          <span class="fw-bold">Amount</span>
          <p><?= $amount ?></p>

          <span class="fw-bold">New Balance</span>
          <p><?= $balance + $amount ?></p>
        </div>
      </div>
  <?php
    }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>