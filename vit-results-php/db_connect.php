<?php
$mysqli = new mysqli("localhost", "root", "", "vit_results");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
