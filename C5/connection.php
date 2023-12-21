<?php 
    $hostname = "localhost";
    $username = "23mca022";
    $password = 2253;
    $dbname = "23mca022";

    $conn = new mysqli($hostname, $username, $password, $dbname);

    if($conn -> connect_errno) {
        echo "Error while connecting!." . $conn->connect_error;
        exit();
    }

?>
