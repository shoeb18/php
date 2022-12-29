<?php
echo "Welcome to the arrays in php <br>";

// Basic Array
$arr = array('this', 'is', 'me');
echo $arr[0];
echo "<br>";

// Associative array
$favCol = array (
    'Shoeb' => 'Cyan',
    'Gaurav' => 'Green',
    'Vishal' => 'Blue'
);

echo $favCol['Shoeb'];
echo "<br>";
echo $favCol['Gaurav'];
echo "<br>";
echo $favCol['Vishal'];
echo "<br>";

foreach ($favCol as $key => $value) {
        echo "The Favorite color of $key is : $value <br> ";
}
?>