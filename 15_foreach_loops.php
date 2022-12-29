<?php

echo "Welcome to the foreach loop program <br>";

$arr = array("Banana", "Grapes", "Mangoes", "Oranges", "Strawberries");

echo "Printing array elements using for loop : <br>";
for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i];
    echo "<br>";
}
echo "<br>";

echo "Printing array elements using foreach loop : <br>";
foreach ($arr as $value) {
    echo $value;
    echo "<br>";
}

?>