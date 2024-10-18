<?php

//Function (reusable code)

//Internal (Built-in) Functions
// isset();

$text = "Hello World";
echo strlen($text);

//User-defined Function

function sayHello(){
  echo "Hello World<br>";
}

sayHello();

//IPO (Input, Process, Output)

function calculateArea(){
  //Input
  $length = 5;
  $width = 10;

  //Process
  $area = $length * $width;

  //Output
  return $area;
}

$result = calculateArea();
echo "The area of the rectangle is: ".$result;

//Arguments (parameters)

function calculate($length, $width){

  //Process
  $area = $length * $width;

  //Output
  return $area;
}

$result = calculate(80, 20);
echo "The area of the rectangle is: ".$result;

?>