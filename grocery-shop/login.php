<?php include "db.php"; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <input name="email" type="email" placeholder="Email" required>
        <input name="password" type="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("SELECT * FROM Consumer WHERE email=? AND password=?");
    $stmt->bind_param("ss", $_POST['email'], $_POST['password']);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows) {
        $_SESSION['email'] = $_POST['email'];
        header("Location: catalogue.php");
    } else {
        echo "<p>Invalid credentials!</p>";
    }
}
?>
</body>
</html>
