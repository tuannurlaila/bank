<?php 

$servername = "localhost";
$username = "cpe1389";
$password = "20112545";
$dbname = "cpe1389";


    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 

?>