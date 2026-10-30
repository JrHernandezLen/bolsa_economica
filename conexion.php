<?php
require_once __DIR__ . '/cargar-env.php';

// Cargamos las variables del archivo .env de esta misma carpeta
cargarEnv(__DIR__ . '/.env');

$host_db = getenv('DB_HOST');
$user_db = getenv('DB_USER');
$pass_db = getenv('DB_PASS');
$db_name = getenv('DB_NAME');

// Hacemos que mysqli no lance excepciones para poder revisar connect_error
mysqli_report(MYSQLI_REPORT_OFF);

$conn = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

$conn->set_charset("utf8");
