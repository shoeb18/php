<?php

$age = 19;

if ($age > 18){
    echo "You can drive";
}
else{
    echo "You cannot drive";
}


// Quick quiz
// 1. create an if else ladder more than elseif 
// 2. write a program to drive a driver to allow when if age is 25 >= and 65 <= )

// solution 1. 

$number = 3;

if ($number == 1){
    echo "The number is 1 <br>";
}
elseif ($number == 2){
    echo "The number is 2 <br>";
}
elseif ($number == 3){
    echo "The number is 3 <br>";
}
else{
    echo "The number is not 1, 2 or 3";
}



$drivers_age = 35;

if ($drivers_age >= 25 and $drivers_age <= 65){
    echo "The driver can drive <br>";
}
else{
    echo "The driver cannot drive <br>";
}
?>