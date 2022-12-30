<?php
// connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection is not successful
if (!$conn){
    die("Sorry we failed to connect. ". mysqli_connect_error());
}
else{
    echo "Connection was successful!";
}

// create a database
$sql = "CREATE DATABASE MYSCHOOL";
$result = mysqli_query($conn, $sql);

echo "The result is : ";
echo var_dump($result);
echo "<br>";

// check for the database creation success
if ($result){
    echo "The database was created successfully!<br>";
}
else{
    echo "The database was not created successfully <br>";
    echo "Because of this error --> ". mysqli_error($conn);
}

?>