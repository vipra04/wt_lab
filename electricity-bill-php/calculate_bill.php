<?php
require 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$units = $_POST['units'];

$stmt = $mysqli->prepare("INSERT INTO consumer (name, email, address) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $address);
$stmt->execute();
$consumer_id = $stmt->insert_id;

$amount = 0;
if ($units <= 50) {
    $amount = $units * 3.50;
} elseif ($units <= 150) {
    $amount = 50 * 3.50 + ($units - 50) * 4.00;
} elseif ($units <= 250) {
    $amount = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
} else {
    $amount = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
}

$stmt = $mysqli->prepare("INSERT INTO billing (consumer_id, units, total_amount, billing_date) VALUES (?, ?, ?, CURDATE())");
$stmt->bind_param("iid", $consumer_id, $units, $amount);
$stmt->execute();

echo "<h4>Bill for $name</h4>";
echo "<p>Total Units: $units</p>";
echo "<p>Total Amount: ₹$amount</p>";
?>
