<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
require 'db_connect.php';

$result = $mysqli->query("SELECT * FROM books");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Catalogue - Online Book Store</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-5">
  <h2>Book Catalogue</h2>
  <div class="row">
    <?php while ($row = $result->fetch_assoc()) : ?>
      <div class="col-md-3 mb-4">
        <div class="card h-100">
          <img src="<?php echo htmlspecialchars($row['cover']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['title']); ?>" style="height: 250px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
            <p class="card-text">By <?php echo htmlspecialchars($row['author']); ?></p>
            <p class="card-text"><strong>₹<?php echo number_format($row['price'], 2); ?></strong></p>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>
</body>
</html>
