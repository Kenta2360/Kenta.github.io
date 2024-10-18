<?php
function showData(){
  echo "**************************************<br>";
  echo showName() . "<br>";
  echo showEmail() . "<br>";
  echo showPhone() . "<br>";
  echo "***************************************";
}

function showName(){
  $name = "John.Smith";
  return "Name: " . $name;
}

function showEmail(){
  $email = "john@gmail.com";
  return "Email: " . $email;
}

function showPhone(){
  $phone_number = "+63 123 456 789";
  return "Phone: " . $phone_number;
}

showData();
?>