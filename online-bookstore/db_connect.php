<?php
$mysqli = new mysqli("localhost", "root", "", "online_bookstore");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
