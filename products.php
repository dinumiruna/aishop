<?php include('php/header.php'); ?>
<?php include('php/db.php'); ?>

<div class="container">
    <h1>Produse</h1>
    <div class="product-list">
        <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<h2>" . $row['name'] . "</h2>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<p>" . $row['price'] . " RON</p>";
                echo "<form action='cart.php' method='post'>";
                echo "<input type='hidden' name='product_id' value='" . $row['id'] . "'>";
                echo "<button type='submit'>Adaugă în coș</button>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "Nu există produse disponibile.";
        }
        ?>
    </div>
</div>
<?php include('php/footer.php'); ?>
