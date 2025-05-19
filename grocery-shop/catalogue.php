<?php include "db.php"; session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Catalogue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Grocery Items</h1>

<?php
$result = $conn->query("SELECT * FROM Items");
while ($row = $result->fetch_assoc()) {
    echo "<div class='catalogue-item'>";
    echo "<img src='{$row['image']}' alt='{$row['name']}'>";
    echo "<h3>{$row['name']}</h3>";
    echo "<p>₹{$row['price']}</p>";
    echo "<p>{$row['category']}</p>";
    echo "</div>";
}
?>
</body>
</html>
