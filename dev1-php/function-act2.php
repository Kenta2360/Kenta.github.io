<?php

  function showData($num1, $num2){

    $sum = $num1 + $num2;
    $pro = $num1 * $num2;
    $quot  = $num1 / $num2;
    $diff = $num1 - $num2;
    $mod = $num1 % $num2;

    echo "************************************************<br>";
    echo "First Number: ".$num1 . "<br>";
    echo "Second Number: ".$num2 . "<br>";
    echo "---------- Calculation ----------<br>";
    echo "Sum: ".$sum . "<br>";
    echo "Product: ".$pro . "<br>";
    echo "Quotient; ".$quot . "<br>";
    echo "Diffeerence: ".$diff. "<br>";
    echo "Modulo: ".$mod . "<br>";
    echo "**************************************************";
  }

  showData(10, 5);
?>