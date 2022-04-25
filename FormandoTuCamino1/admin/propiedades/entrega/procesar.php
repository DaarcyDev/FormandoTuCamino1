<?php

    // Base de datos
    require '../../../includes/config/database.php';
    $db = conectarDB();


    $Id = $_POST["Id"];
    $Clases = $_POST["Clases"];
    $Dudas = $_POST["Dudas"];
    $Evaluacion = $_POST["Evaluacion"];

    $query = " INSERT INTO entregaservicios (ServiciosId, clases, dudas, evaluacion) 
        VALUES ( '$Id', '$Clases', '$Dudas', '$Evaluacion') ";
        
        echo $query;

        $resultado = mysqli_query($db, $query);

        if($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin/propiedades/entrega/entrega.php');
        }