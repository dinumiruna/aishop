<?php
include('db.php');

function getProductName($product_id) {
    global $conn;
    $product_id = intval($product_id); // Asigură-te că product_id este un întreg pentru a evita SQL injection
    $sql = "SELECT name FROM products WHERE id = $product_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['name'];
    } else {
        return "Produs necunoscut";
    }
}

function saveOrder($user_id, $products) {
    global $conn;
    $sql = "INSERT INTO orders (user_id) VALUES ('$user_id')";
    if ($conn->query($sql) === TRUE) {
        $order_id = $conn->insert_id;
        foreach ($products as $product_id) {
            $product_id = intval($product_id); // Asigură-te că product_id este un întreg pentru a evita SQL injection
            $sql = "INSERT INTO order_items (order_id, product_id) VALUES ('$order_id', '$product_id')";
            $conn->query($sql);
        }
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }
}
?>
