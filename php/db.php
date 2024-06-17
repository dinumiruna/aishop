<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ai_packages_store";

// Creare conexiune
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificare conexiune
if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}
?>
