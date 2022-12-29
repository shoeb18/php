<?php
echo "Welcome to the local and global scope of variables <br>";

$a = 34; // Global variable

// global variable scope are outside the functions in php

function printValue(){
    // $a = 90; // Local variable
    global $a; // Give me the access to global variable a
    $a = 100;
    echo "The value of your variable is : $a <br>";
}

echo $a;
echo "<br>";
printValue();


?>