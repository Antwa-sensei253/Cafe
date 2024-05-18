<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "coffeeshop";

$connected = mysqli_connect($server, $username, $password, $dbname);
if (!$connected) {
    die("Connection failed: " . mysqli_connect_error());
}
?>