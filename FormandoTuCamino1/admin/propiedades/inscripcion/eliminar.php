<?php
    // Base de datos    
    echo "hola ";
    require '../../../includes/config/database.php';
    $db = conectarDB();

    $nombre=$_GET["primerNombre"];
    $query = "DELETE FROM solicitudregistro WHERE primerNombre = '${nombre}'";
    echo $query;
    $resutlado = mysqli_query($db, $query);
    header('Location: /admin/propiedades/inscripcion/inscripcion.php');