<?php
$host = "localhost";
$pass = "";
$username = "";
$dbName = "test";

session_start();

$conn = mysqli_connect($host, $username, $pass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
