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

// create table in the database
$sql = "CREATE TABLE `phptrip` (`Sr No` INT NOT NULL AUTO_INCREMENT , `Name` INT NOT NULL , `dest` INT NOT NULL , `fees` INT NOT NULL , PRIMARY KEY (`Sr No`))";
$result = mysqli_query($conn, $sql);

// check for the table creation success
if ($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully <br>";
    echo "Because of this error --> ". mysqli_error($conn);
}

?>