<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="css/style.css">
    <title>AiSHOP</title>
</head>
<body>
<header>
    <h1>AISHOP</h1>
    <nav>
        <ul>
            <li><a href="index.php">Acasa</a></li>
            <li><a href="products.php">Produse</a></li>
            <li><a href="about.php">Despre</a></li>
            <li><a href="cart.php">Cos</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<main>
