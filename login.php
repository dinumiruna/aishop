<?php include('php/header.php'); ?>
<?php include('php/db.php'); ?>

<div class="container">
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Parolă:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                header("Location: index.php");
                exit();
            } else {
                echo "<p>Parola este incorectă.</p>";
            }
        } else {
            echo "<p>Nu există un cont cu acest email.</p>";
        }
    }
    ?>
</div>
<?php include('php/footer.php'); ?>
