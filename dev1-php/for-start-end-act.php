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
      <p>for-start-end-act2</p>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <input type="number" name="num1" id="" placeholder="Start Number" class="form-control">
        <input type="number" name="num2" id="" placeholder="End Number" class="form-control my-3">
        <input type="submit" name="result" value="Submit" class="btn btn-danger w-100">
      </form>
    </div>
  </div>

  <?php
  if (isset($_POST['result'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 > $num2){
      echo "<div class='card-body w-25 bg-info text-white mx-auto py-4 px-2 mt-2'>Start: $num1<br>End: $num2<br>";
      for ($i = $num1; $i >= $num2; $i--){
        echo "$i ";
      }
    }elseif($num1 < $num2){
      echo "<div class='card-body w-25 bg-success text-white mx-auto py-4 px-2 mt-2'>";
      for ($i = $num1; $i <= $num2; $i++){
      echo "$i ";
    }}else{
      echo "<div class='card-body w-25 bg-warning text-white mx-auto text-center h3 py-4 px-2 mt-2'>Error";
    }}
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>