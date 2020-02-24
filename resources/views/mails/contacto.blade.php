<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Llamado de emergencia</title>
</head>
<body>
<p>Hola! te an contactatdo por lo siguiente</p>
<hr>
<ul>
    <?php
    foreach ($contacto as $key => $value) {
        if ($key != "_token" || $key != "propiedad_id" || $key != "user_id") {
            echo "<li>".$key.": ".$value."</li>";
        }
    }
    ?>
    <h2>Propiedad:</h2>
    <?php
        var_dump($propiedad);
//    foreach ($propiedad as $key => $value) {
//        echo "<li>".$key.": ".$value."</li>";
//    }
    ?>
    <h2>Cliente:</h2>
    <?php
    foreach ($cliente as $key => $value) {
        echo "<li>".$key.": ".$value."</li>";
    }
    ?>
</ul>

{{--{{ $contacto['comentario'] }}--}}
</body>
</html>
