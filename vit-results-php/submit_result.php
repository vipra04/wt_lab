<?php
require 'db_connect.php';

$name = $_POST['name'];
$roll_no = $_POST['roll_no'];
$subjects = ['DBMS', 'OS', 'OOPs', 'CN'];

// Insert into students
$stmt = $mysqli->prepare("INSERT INTO students (name, roll_no) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $roll_no);
$stmt->execute();
$student_id = $stmt->insert_id;

// Insert into MSE and ESE
foreach ($subjects as $subject) {
    $mse = $_POST['mse_' . strtolower($subject)];
    $ese = $_POST['ese_' . strtolower($subject)];

    $stmt = $mysqli->prepare("INSERT INTO mse (student_id, subject, marks) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $student_id, $subject, $mse);
    $stmt->execute();

    $stmt = $mysqli->prepare("INSERT INTO ese (student_id, subject, marks) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $student_id, $subject, $ese);
    $stmt->execute();
}

echo "<h4>Result for $name (Roll No: $roll_no)</h4><table class='table table-bordered'><thead><tr><th>Subject</th><th>MSE (30%)</th><th>ESE (70%)</th><th>Total</th></tr></thead><tbody>";

foreach ($subjects as $subject) {
    $mse = $_POST['mse_' . strtolower($subject)];
    $ese = $_POST['ese_' . strtolower($subject)];
    $total = ($mse * 0.3) + ($ese * 0.7);
    echo "<tr><td>$subject</td><td>$mse</td><td>$ese</td><td>" . round($total, 2) . "</td></tr>";
}

echo "</tbody></table>";
?>
