<?php
include('php/header.php');
include('php/db.php');
include('php/functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
    $product_id = intval($_POST['product_id']); // Asigură-te că product_id este un întreg pentru a evita SQL injection
    // Adaugă produsul în coș
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    array_push($_SESSION['cart'], $product_id);
}

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<div class="container">
    <h1>Coșul meu</h1>
    <ul>
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
            <?php foreach ($_SESSION['cart'] as $product_id) : ?>
                <li><?php echo getProductName($product_id); ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Coșul este gol.</li>
        <?php endif; ?>
    </ul>
    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
        <form action="order.php" method="post">
            <button type="submit">Finalizează comanda</button>
        </form>
    <?php endif; ?>
</div>
<?php include('php/footer.php'); ?>
