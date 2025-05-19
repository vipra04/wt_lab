<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Login - Online Book Store</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-5 col-md-4">
  <h3 class="mb-3">Login</h3>
  <form method="post" action="login_handler.php">
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" name="username" id="username" class="form-control" required />
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" id="password" class="form-control" required />
    </div>
    <button class="btn btn-primary w-100" type="submit">Login</button>
  </form>
  <p class="mt-3">Don't have an account? <a href="register.php">Register here</a>.</p>
</div>
</body>
</html>
