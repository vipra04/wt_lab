<!DOCTYPE html>
<html>
<head>
    <title>Online Grocery Shop</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f2f2f2;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #2c3e50;
            padding: 15px 30px;
            color: white;
        }

        .navbar .brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            margin-left: 20px;
            font-weight: 500;
        }

        .navbar .nav-links {
            display: flex;
            align-items: center;
        }

        .hero {
            text-align: center;
            margin-top: 100px;
            padding: 20px;
        }

        .hero h1 {
            font-size: 3rem;
            color: #2c3e50;
        }

        .hero p {
            font-size: 1.2rem;
            color: #555;
            max-width: 600px;
            margin: 20px auto;
        }

        .hero a {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 25px;
            background-color: #27ae60;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .hero a:hover {
            background-color: #219150;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="brand">Grocery Shop</div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
            <a href="catalogue.php">Catalogue</a>
            <a href="register.php">Register</a>
        </div>
    </div>

    <div class="hero">
        <h1>Welcome to the Online Grocery Shop</h1>
        <p>Shop fresh groceries at your fingertips. Quality products delivered to your door with ease!</p>
        <a href="catalogue.php">Shop Now</a>
    </div>

</body>
</html>
