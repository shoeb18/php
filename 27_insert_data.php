<?php 

// connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbShoeb";

// create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection is not successful
if (!$conn){
    die("Sorry we failed to connect. ". mysqli_connect_error());
}
else{
    echo "Connection was successful!";
}

// variables to be inserted into the table
$name = "Doraemon";
$destination = "Japan";

// sql query to be executed
$sql = "INSERT INTO `trip` (`Name`, `Dest`) VALUES ('$name', '$destination');";
$result = mysqli_query($conn, $sql);

// Add a new trip to the trip table in the database
if ($result){
    echo "The record was inserted successfully <br>";
}
else{
    echo "The record was not inserted    successfully!<br>";
    echo "Because of this error --> ". mysqli_error($conn);
}