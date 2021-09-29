<?php

// abrir csv
if (!($fp = fopen("http://tech-test.wamdev.net", 'r'))) {
    die("No se puede acceder al csv...");
}

//añadir cabecera
$key = array("Localizador", "Huesped", "Fecha de entrada", "Fecha de salida", "Hotel", "Precio", "Posibles Acciones");


// convertir csv en array
$json = array();
while (($row = fgetcsv($fp, "1024", ";")) !== false) {
    if (array(null) !== $row) { // ignore lineas vacias
        $json[] = array_combine($key, $row);
    }
}

// cerrar fichero
fclose($fp);


//devolver json
if (isset($_GET["dt"])) {
    echo json_encode([
        'data' => $json,
    ]);
} else {
    header('Content-disposition: attachment; filename=listJson.json');
    header('Content-type: application/json');

    echo (json_encode($json));
}


?>