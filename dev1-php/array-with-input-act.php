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
  <div class="card mx-auto w-25 text-center mt-3">
    <div class="card-header text-white bg-secondary">
      <h6>Countries Visited</h6>
    </div>
    <div class="card-body text-center bg-light">
      <p>Number of Countries Visited</p>
      <form action="" method="post">
        <input type="number" name="num" id="" class="form-control">
        <input type="submit" name="submit_num" value="Submut" class="btn btn-danger w-100 mt-3">
      </form>
    </div>
  </div>

  <?php
    if (isset($_POST['submit_num'])){
      $num = $_POST['num'];
      input_coun($num);
    }
      if (isset($_POST['submit_coun'])){
        $inputs = $_POST['inputs'];
        display_coun($inputs);
      }

    function input_coun($num){
      echo "<form action='' method='post'>";
      echo "<div class='card card-body w-25 mx-auto text-center bg-success mt-3'>";
      for ($i = 1; $i <= $num; $i++){
        echo "<input type='text' name='inputs[]' id='' class='form-control mb-3 mx-auto'>";
      }
      echo "<input type='submit' name='submit_coun' value='Submut' class='btn btn-danger w-100 mt-2'>";
    }

    function display_coun($inputs){
      echo "<div class='card card-body w-25 mx-auto text-white bg-success mt-3'>
      You have been to:<br>";
      foreach ($inputs as $input){
        echo $input ."<br>";
      }
    }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>