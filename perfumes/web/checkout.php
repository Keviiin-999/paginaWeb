<?php
session_start();
require 'database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_SESSION['cart'])) {
    $cartItems = $_SESSION['cart'];
    $userId = $_SESSION['user_id'];

    try {
        $pdo->beginTransaction();
        
        $stmt = $pdo->prepare("INSERT INTO orders (user_id, order_date) VALUES (?, NOW())");
        $stmt->execute([$userId]);
        $orderId = $pdo->lastInsertId();

        $stmt = $pdo->prepare("INSERT INTO order_items (order_id, product_name, price, quantity, image) VALUES (?, ?, ?, ?, ?)");
        foreach ($cartItems as $item) {
            $stmt->execute([$orderId, $item['product'], $item['price'], 1, $item['image']]);
        }

        $pdo->commit();
        unset($_SESSION['cart']);
        header("Location: confirmation.php");
        exit();
    } catch (Exception $e) {
        $pdo->rollBack();
        echo "Error al procesar la compra: " . $e->getMessage();
    }
} else {
    echo "No hay productos en el carrito.";
}
?>
