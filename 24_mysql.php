<?php
echo "Welcome to the stage where we are ready to get connected to a database <br>";

// ways to connect to a MySql database
// 1. MySQLi extension (i=improve)
// 2. PDO (php data objects)

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

?>