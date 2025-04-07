<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="stylesct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="contact">
        <h2>Contacto</h2>
        <p>Nos encantaría saber de ti. Completa el formulario a continuación y nos pondremos en contacto contigo lo antes posible.</p>
        <form class="contact-form">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </section>
</body>
</html>