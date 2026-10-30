<?php
// Lee un archivo .env y guarda cada variable para usarla con getenv()
function cargarEnv($ruta)
{
    if (!file_exists($ruta)) {
        die("No se encontró el archivo .env en: " . $ruta);
    }

    $lineas = file($ruta, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lineas as $linea) {
        $linea = trim($linea);

        // Saltamos los comentarios
        if ($linea === '' || $linea[0] === '#') {
            continue;
        }

        // Separamos NOMBRE=valor (solo en el primer "=")
        list($nombre, $valor) = explode('=', $linea, 2);
        $nombre = trim($nombre);
        $valor = trim($valor, " \t\"'");

        putenv("$nombre=$valor");
        $_ENV[$nombre] = $valor;
    }
}
