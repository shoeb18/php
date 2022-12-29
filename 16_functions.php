<?php 

echo "Welcome to the world of functions in php <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}


$shoeb = [78,89,90,73,65,65];
$sumShoeb = processMarks($shoeb);
echo "The total marks obtained by shoeb out of 600 is : $sumShoeb <br>";

?>