<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ph_company";   

$mysqli = new mysqli($servername, $username, $password,  $dbname);    
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
else {
    echo "Connected successfully";
}


?>