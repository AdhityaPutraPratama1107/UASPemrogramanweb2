<?php
$servername = "localhost";
$username = "id22397839_adhityaputrapratama";
$password = "Flame@145";
$dbname = "id22397839_db_uas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
