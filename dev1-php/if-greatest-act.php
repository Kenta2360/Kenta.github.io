<?php
$num1 = 20;
$num2 = 20;
$num3 = 20;

if($num1>$num2 && $num1>$num3){
  echo "Greatest Number is: ".$num1;
}
if($num2>$num1 && $num2>$num3){
  echo "Greatest Number is: ".$num2;
}
if($num3>$num1 && $num3>$num2){
  echo "Greatest Number is: ".$num3;
}
if($num1===$num2 && $num1==$num3){
  echo "Greatest Number is: ".$num1;
}
if($num1===$num2 && $num1>$num3){
  echo "Greatest Number is: ".$num1;
}
if($num1===$num3 && $num1>$num2){
  echo "Greatest Number is: ".$num1;
}
if($num2===$num3 && $num2>$num1){
  echo "Greatest Number is: ".$num2;
}



echo "<br>";

if($num1<$num2 && $num1<$num3){
  echo "Least Number is: ".$num1;
}
if($num2<$num1 && $num2<$num3){
  echo "Least Number is: ".$num2;
}
if($num3<$num1 && $num3<$num2){
  echo "Least Number is: ".$num3;
}
if($num1===$num2 && $num1==$num3){
  echo "Least Number is: ".$num1;
}
if($num1===$num2 && $num1<$num3){
  echo "Least Number is: ".$num1;
}
if($num1===$num3 && $num1<$num2){
  echo "Least Number is: ".$num1;
}
if($num2===$num3 && $num2<$num1){
  echo "Least Number is: ".$num2;
}
