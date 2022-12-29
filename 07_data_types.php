<?php
// Data types in php
// 1. String
// 2. Integer
// 3. Float 
// 4. Boolean 
// 5. Object
// 6. Array
// 7. Null

// String - is a sequence of characters
$name = "shoeb";
$friend_name = "vishal";
echo "$name ka friend is $friend_name <br>";

// Integer - non decimal number
$salary = 50000;
echo "The salary is : $salary <br>";

// Float - decimal number
$salary = 455.66;
echo "The salary in float is : $salary <br>" ;

// Boolean - true or false
$isFriend = true;
echo var_dump($isFriend);
echo "<br>";

// Objects - instances of classes
// Employee is class --> shoeb is object of it

// Array - is used to store multiple values in a single variable
$friends = array("gaurav", "vishal", "ashwin");
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";

// NULL - matlab kuch nahi nil bate sannata
$name = NULL;
echo var_dump($name);

?>