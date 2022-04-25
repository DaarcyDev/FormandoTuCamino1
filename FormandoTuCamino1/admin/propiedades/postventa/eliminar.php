<?php
    // Base de datos    
    echo "hola ";
    require '../../../includes/config/database.php';
    $db = conectarDB();

    $nombre=$_GET["id"];
    $query = "DELETE FROM certificadotramites WHERE id = '${nombre}'";
    echo $query;
    $resutlado = mysqli_query($db, $query);
    header('Location: /admin/propiedades/postventa/postventa.php');