<?php
session_start();
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']); 

    $sql = "SELECT id, username FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header("Location: ../index.php");
    } else {
        $error = "Correo o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <!-- (igual al index.html) -->
    </header>

    <main>
        <section class="login">
            <h2>INGRESAR A TU CUENTA</h2>
            <form method="post">
                <label for="email">Correo</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" class="btn">Iniciar Sesión</button>
                <a href="register.php" class="btn">Registrarse</a>
                <?php if (isset($error)) echo "<p>$error</p>"; ?>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Perfumes de Lujo. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
