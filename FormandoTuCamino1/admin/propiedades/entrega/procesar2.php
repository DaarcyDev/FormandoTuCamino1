<?php

    // Base de datos
    require '../../../includes/config/database.php';
    $db = conectarDB();

    $consulta = "SELECT * FROM entregaservicios";
    $resultadoo = mysqli_query($db, $consulta);
    $rows = $resultadoo -> fetch_assoc();

    $Id = $_POST["Id"];
    $Clases = $_POST["Clases"];
    $Dudas = $_POST["Dudas"];
    $Evaluacion = $_POST["Evaluacion"];


    $query = " UPDATE entregaservicios SET ServiciosId='$Id',clases='$Clases',dudas='$Dudas',evaluacion='$Evaluacion' WHERE ServiciosId = '$rows[ServiciosId]'";

        echo $query;

        $resultado = mysqli_query($db, $query);

        if($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin/propiedades/entrega/entrega.php');
        }