<?php
session_start();
include('php/db.php');
include('php/functions.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $products = $_SESSION['cart'];

    // Salvează comanda în baza de date
    saveOrder($user_id, $products);
    // Golește coșul
    unset($_SESSION['cart']);
    echo "<h1>Comanda a fost finalizată cu succes!</h1>";
    echo "<a href='index.php' class='button'>Înapoi la pagina principală</a>";
}
?>
