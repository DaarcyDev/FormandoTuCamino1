<?php
    // Base de datos    
    echo "hola ";
    require '../../../includes/config/database.php';
    $db = conectarDB();

    $nombre=$_GET["DocenteN"];
    $query = "DELETE FROM curso WHERE DocenteN = '${nombre}'";
    echo $query;
    $resutlado = mysqli_query($db, $query);
    header('Location: /admin/propiedades/produccion/produccion.php');