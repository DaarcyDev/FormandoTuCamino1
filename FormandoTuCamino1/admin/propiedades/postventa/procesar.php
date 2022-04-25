<?php

    // Base de datos
    require '../../../includes/config/database.php';
    $db = conectarDB();


    $Id = $_POST["Id"];
    $Nombres = $_POST["Nombres"];
    $Apellidos = $_POST["Apellidos"];
    $Calificacion = $_POST["Calificacion"];
    $Cursos = $_POST["Cursos"];
    $Fecha = $_POST["Fecha"];
    $NumeroControl = $_POST["NumeroControl"];

    $query = " INSERT INTO certificadotramites (id, Nombres, Apellidos, Calificacion, Cursos, fecha, numeroControl) 
        VALUES ( '$Id', '$Nombres', '$Apellidos', '$Calificacion', '$Cursos', '$Fecha', '$NumeroControl') ";
        
        echo $query;

        $resultado = mysqli_query($db, $query);

        if($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin/propiedades/postventa/postventa.php');
        }