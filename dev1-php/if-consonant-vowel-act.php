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
<div class="card w-25 mx-auto text-center">
    <div class="card-header">
      <p>if-increasing-decreasing-act</p>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <input type="text" name="letter" id="" placeholder="Enter a letter" class="form-control">
        <input type="submit" name="result" value="Check" class="btn btn-danger w-100 mt-3">
      </form>
    </div>
  </div>

<?php
  if (isset($_POST['result'])){
    $letter = strtolower($_POST['letter']);


    if ($letter == 'a' || $letter == "i" || $letter == "u" || $letter == "e" || $letter == "o"){
        echo "<div class='card w-25 bg-danger text-white text-center mx-auto py-4'>Letter: $letter<br>Vowel";
      }elseif(is_numeric($letter)){
        echo "<div class='card w-25 bg-danger text-white text-center mx-auto py-4'>Number: ".$letter."<br>Number";
      }elseif(strlen($letter) > 1){
        echo "<div class='card w-25 bg-danger text-white text-center mx-auto py-4'>Characters: word<br>Please Enter One Letter Only!";
      }else{
        echo "<div class='card w-25 bg-danger text-white text-center mx-auto py-4'>Letter: $letter<br>Consonant";
    }
  }
  

?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>