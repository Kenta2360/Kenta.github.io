<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    td{
      border: 1px solid white;
      color: yellow;
    }
  </style>
</head>
<body>
  <div class="card w-25 mx-auto text-center mt-4">
    <div class="card-header text-center text-white bg-secondary">
      <h6>Row Col</h6>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <input type="number" name="row" id="" placeholder="Row" class="form-control">
        <input type="number" name="col" id="" placeholder="Column" class="form-control mt-3">
        <input type="submit" name="box" value="Submit" class="btn btn-danger w-100 mt-3">
      </form>
    </div>
  </div>

  <?php
  if (isset($_POST['box'])){
    $row = $_POST['row'];
    $col = $_POST['col'];
    echo "<div class='card card-body mx-auto bg-success mt-4 w-25 text-white'>Row: $row<br>Column: $col</div>";
    echo "<div class='card card-body mx-auto bg-success mt-4 w-50'>";
    box($row, $col);
  }

  function box($row, $col){
    echo "<table>";
    for ($i = 1; $i <= $row; $i++){
      echo "<tr>";
      for ($j = 1; $j <= $col; $j++){
        echo "<td>*";
      }
    }
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>