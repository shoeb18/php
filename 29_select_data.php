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

$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);

// find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo "<br>";
// display the rows returned by the sql query
if ($num > 0){
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['Sr No']. " Hello ". $row['Name']. " Welcome to ". $row['Dest'] ;
        echo "<br>";
    }
}
?>
