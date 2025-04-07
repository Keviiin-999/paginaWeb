<?php
include 'db.php';

function fetchProducts() {
    global $conn;
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    return $result;
}

function addToCart($productId, $userId) {
    global $conn;
    $sql = "INSERT INTO cart (user_id, product_id) VALUES ('$userId', '$productId')";
    $conn->query($sql);
}

function fetchCartItems($userId) {
    global $conn;
    $sql = "SELECT p.* FROM cart c JOIN products p ON c.product_id = p.id WHERE c.user_id = '$userId'";
    $result = $conn->query($sql);
    return $result;
}
?>
