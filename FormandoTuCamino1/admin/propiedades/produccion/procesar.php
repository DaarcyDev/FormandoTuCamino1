<?php

    // Base de datos
    require '../../../includes/config/database.php';
    $db = conectarDB();


    $idcurso = $_POST["idCurso"];
    $material = $_POST["Material"];
    $tema = $_POST["Tema"];
    $docenteN = $_POST["DocenteN"];

    $query = " INSERT INTO curso (idCurso, material, tema, docenteN) 
        VALUES ('$idcurso', '$material', '$tema', '$docenteN')";
        
        echo $query;

        $resultado = mysqli_query($db, $query);

        if($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin/propiedades/produccion/produccion.php');
        }