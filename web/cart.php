<?php
session_start();
$cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <!-- Encabezado aquí -->
    </header>

    <main>
        <section class="cart">
            <h2>Carrito de Compras</h2>
            <div class="cart-items">
                <?php
                if (!empty($cartItems)) {
                    foreach ($cartItems as $item) {
                        echo "
                        <div class='cart-item'>
                            <img src='{$item['image']}' alt='{$item['product']}'>
                            <div class='cart-item-details'>
                                <h3>{$item['product']}</h3>
                                <p class='price'>MX$ {$item['price']}</p>
                            </div>
                        </div>";
                    }
                } else {
                    echo "<p>El carrito está vacío.</p>";
                }
                ?>
            </div>
            <div class="cart-actions">
                <form action="checkout.php" method="post">
                    <button type="submit" class="btn">Proceder al Pago</button>
                </form>
                <a href="empty_cart.php" class="btn">Vaciar Carrito</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Perfumes de Lujo. Todos los derechos reservados.</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
