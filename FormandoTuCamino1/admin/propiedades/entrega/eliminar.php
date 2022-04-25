<?php
    // Base de datos    
    echo "hola ";
    require '../../../includes/config/database.php';
    $db = conectarDB();

    $nombre=$_GET["ServiciosId"];
    $query = "DELETE FROM entregaservicios WHERE ServiciosId = '${nombre}'";
    echo $query;
    $resutlado = mysqli_query($db, $query);
    header('Location: /admin/propiedades/entrega/entrega.php');