<?php
// 1. Reocupamos tu archivo de conexión sin modificarlo
require_once 'conn.php';

// 2. Comprobamos que la información venga del formulario (vía POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Capturamos los datos que envía el formulario HTML
    $nombre   = trim($_POST['nombre'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    // Validaciones básicas
    if (empty($nombre) || empty($email) || empty($password)) {
        die("Por favor completa todos los campos del formulario.");
    }

    // 3. Verificamos si el correo ya existe en la tabla usuarios para no duplicarlo
    $checkEmail = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        die("El correo electrónico ya está registrado. Intenta con otro.");
    }
    $checkEmail->close();

    // 4. Encriptamos la contraseña por seguridad
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

   
    // 5. Insertamos los datos en la tabla usuarios (nombre, email, contrasena)
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, contrasena) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $email, $passwordHash);

    // 6. Ejecutamos la consulta y guardamos en la BD
    if ($stmt->execute()) {
        echo "<script>
                alert('¡Usuario registrado con éxito en la base de datos!');
                window.location.href = 'login.php';
              </script>";
    } else {
        echo "Error al guardar en la base de datos: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    // Si intentan entrar directo a la URL, redirigimos al login
    header("Location: login.php");
    exit();
}
?>