<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso - bolsaeconomica</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="auth-page">
        <!-- LADO IZQUIERDO: Imagen de fondo con sombreado -->
        <div class="auth-image-side"></div>

        <!-- LADO DERECHO: Formularios y pestañas -->
        <div class="auth-form-side">
            <div class="auth-contenedor">
                
                <header class="auth-cabezera">
                    <img src="Imagenes/Logo_bolsae.png" alt="Logo Bolsa Económica" class="logo">
                    <p>Ingresa a tu cuenta o regístrate</p>
                </header>

                <nav class="auth-tabs">
                    <button type="button" class="tab-btn active" id="tabLogin">Iniciar Sesión</button>
                    <button type="button" class="tab-btn" id="tabRegistro">Registrarse</button>
                </nav>

                <!-- Formulario Iniciar Sesión -->
                <form action="login_process.php" method="POST" class="auth-form active" id="formLogin">
                    <div class="input-group">
                        <label for="login-email">Correo Electrónico</label>
                        <input type="email" id="login-email" name="email" placeholder="EJEMPLO@gmail.com" required autocomplete="email">   
                    </div>

                    <div class="input-group">
                        <label for="login-password">Contraseña</label>
                        <input type="password" id="login-password" name="password" placeholder="********" required autocomplete="current-password">
                    </div>

                    <div class="form-actions">
                        <a href="#" class="forgot-password">¿Olvidaste tu Contraseña?</a>
                    </div>

                    <button type="submit" class="btn-submit">Entrar</button>
                </form>

                <!-- Formulario Registro -->
                <form action="registrer.process.php" method="POST" class="auth-form" id="formRegistro">
                    <div class="input-group">
                        <label for="reg-nombre">Nombre completo</label>
                        <input type="text" id="reg-nombre" name="nombre" placeholder="HERNANDEZ TELLEZ JORGE ALFONSO" required autocomplete="name">
                    </div>
                    <div class="input-group">
                        <label for="reg-email">Correo Electrónico</label>
                        <input type="email" id="reg-email" name="email" placeholder="EJEMPLO@gmail.com" required autocomplete="email">
                    </div>
                    <div class="input-group">
                        <label for="reg-password">Contraseña</label>
                        <input type="password" id="reg-password" name="password" placeholder="*******" required minlength="8" autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn-submit">Crear Cuenta</button>
                </form>

            </div>
        </div>
    </div>

    <script src="Animaciones.js/animacion.js?v=6"></script>
</body>
</html>