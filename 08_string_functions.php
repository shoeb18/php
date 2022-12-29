<?php

$name = "Shoeb is a good boy";
echo $name;
echo "<br>";

echo "The length of the string is : " . strlen($name);
echo "<br>";

echo "The words in the string is : " . str_word_count($name);
echo "<br>";

echo "The reverse string is : " . strrev($name);
echo "<br>";

echo "The index of 'is' : " . strpos($name , "is");
echo "<br>";

echo str_replace("Shoeb", "Harry", $name);
echo "<br>";

echo str_repeat("Shoeb", 10);
echo "<br>";

echo rtrim("    I am a good boy");
echo "<br>";


?>