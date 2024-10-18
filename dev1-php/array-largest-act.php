<?php
$numbers = [1, 9, 5.9, 30, 40, 6.7, 70, 58];

foreach ($numbers as $number){
  echo "$number | ";
}
echo "<br><br>";
$maxnum = $numbers[0];

foreach ($numbers as $number){
  if ($number > $maxnum){
    $maxnum = $number;
  }}
  echo "Largest: $maxnum";
?>