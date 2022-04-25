<?php

    // Base de datos
    require '../../../includes/config/database.php';
    $db = conectarDB();


    $PrimerNombre = $_POST["PrimerNombre"];
    $SegundoNombre = $_POST["SegundoNombre"];
    $PrimerApellido = $_POST["PrimerApellido"];
    $SegundoApellido = $_POST["SegundoApellido"];
    $FechaNacimiento = $_POST["FechaNacimiento"];
    $Curp = $_POST["Curp"];
    $Correo = $_POST["Correo"];
    $Direccion = $_POST["Direccion"];
    $Telefono = $_POST["Telefono"];
    $Carrera = $_POST["Carrera"];

    $query = " INSERT INTO solicitudregistro (primerNombre, segundoNombre, primerApellido, segundoApellido, fechaNacimiento, curp, correoElectronico, direccion, telefono, carreraAelegir ) 
        VALUES ( '$PrimerNombre', '$SegundoNombre', '$PrimerApellido', '$SegundoApellido', '$FechaNacimiento', '$Curp', '$Correo', '$Direccion', '$Telefono', '$Carrera' ) ";
        
        echo $query;

        $resultado = mysqli_query($db, $query);

        if($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin/propiedades/inscripcion/inscripcion.php');
        }