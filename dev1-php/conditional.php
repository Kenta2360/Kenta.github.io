<?php
//If

// $num = 15;

// if($num>10){
//   echo "The number is greater than 10";
// }

// //If else

// $color = "red";

// if ($color == "blue"){
//   echo "The color is blue";
// }else{
//   "The color is not blue";
// }

// $temperature = 21;

// if ($temperature > 40){
//   echo "It's very hot outside";
// }else {
//   if ($temperature > 30){
//     echo "It's warm outside";
//   }else {
//     if ($temperature > 20){
//       echo "It's nice day";
//     }else{
//       echo "It's quite cool outside";
//     }
//   }
// }

// $grade = 75;

// if ($grade >= 90){
//   echo "Your grade is A";
// }elseif($grade >=80){
//   echo "Your grade is B";
// }elseif($grade >=70){
//   echo "Your grade is C";
// }else{
//   echo "You failed the class.";
// }

$user_role = "admin";
$permission_level = 3;

if ($user_role == "admin"){
  if ($permission_level >= 5){
    echo "Access to all administrative features granted.";
  }elseif($permission_level >= 3){
    echo "Access to some administrative features granted.";
  }else{
    echo "Limited access. Upgrade your permission level.";
  }
}else{
  echo "Access denied. You do not have administrative privileges.";
}

?>