<?php

$host = "localhost";
$usernameDB = "root";
$pwd = "";
$datab = "ass";


$conn = new mysqli($host, $usernameDB, $pwd, $datab);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 ?>
