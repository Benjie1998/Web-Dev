<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "banjo";

//create connection
$conn = mysqli_connect($servername, $username, $password, $database);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>