<?php include('php/header.php'); ?>
<?php include('php/db.php'); ?>

<div class="container">
    <h1>Înregistrare</h1>
    <form action="register.php" method="post">
        <label for="name">Nume:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Parolă:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Înregistrează-te</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Contul a fost creat cu succes. <a href='login.php'>Login</a></p>";
        } else {
            echo "<p>Eroare: " . $conn->error . "</p>";
        }
    }
    ?>
</div>
<?php include('php/footer.php'); ?>
