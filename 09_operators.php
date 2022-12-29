<?php

// Operators in php
// operator in a sysmbol is used to perform operation between two operands

// 1. Arithmetic operators
// 2. Assignment operators
// 3. Comparison operators
// 4. Logical operators


// 1. Arithmetic operators
$num1 = 30;
$num2 = 40;
echo "The a + b is : ". ($num1 + $num2) . "<br>";
echo "The a - b is : ". ($num1 - $num2) . "<br>";
echo "The a * b is : ". ($num1 * $num2) . "<br>";
echo "The a / b is : ". ($num1 / $num2) . "<br>";
echo "The a % b is : ". ($num1 % $num2) . "<br>";
echo "The a ** b is : ". ($num1 ** $num2) . "<br>";

// 2. Assignment operators
$x = $num1;
echo "The value of x is : $x";
echo "<br>";
$x += 10;
echo "The value of x is now : $x";
echo "<br";

// 3. Comparison operators
$n1 = 4;
$n2 = 5;
echo "The value of n1 == n2 is : " . var_dump($n1 == $n2) . "<br>";
echo "The value of n1 != n2 is : " . var_dump($n1 != $n2) . "<br>";
echo "The value of n1 > n2 is : " . var_dump($n1 > $n2) . "<br>";
echo "The value of n1 < n2 is : " . var_dump($n1 < $n2) . "<br>";
echo "The value of n1 >= n2 is : " . var_dump($n1 >= $n2) . "<br>";
echo "The value of n1 <= n2 is : " . var_dump($n1 <= $n2) . "<br>";
echo "<br>";

// 4. Logical operators

$m = true;
$n = false;

// we can write the logical operators with 'and' and && both are equivalent
echo "For m and n the result is : ";
echo var_dump($m and $n);
echo "<br>";

echo "For m or n the result is : ";
echo var_dump($m or $n);
echo "<br>";

echo "For !m the result is : ";
echo var_dump(!$m);
echo "<br>";

?>