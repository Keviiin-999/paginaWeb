<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../includes/db.php';
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $Contraseña = md5( $_POST['Contraseña']);

    $sql = "INSERT INTO users (usuario, correo, Contraseña) VALUES ('$usuario','$correo', '$Contraseña')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>

    </header>

    <main>
        <section class="register">
            <h2>REGISTRARSE</h2>
            <form method="post">
                <label for="usuario">Nombre de usuario</label>
                <input type="text" id="usuario" name="usuario" required>
                <label for="correo">Correo</label>
                <input type="text" id="correo" name="correo" required>
                <label for="password">Contraseña</label>
                <input type="password" id="Contraseña" name="Contraseña" required>
                <button type="submit" class="btn">REGISTRARSE</button>
                <?php if (isset($error)) echo "<p>$error</p>"; ?>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Perfumes de Lujo. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
