<?php

    // Base de datos
    require '../../../includes/config/database.php';
    $db = conectarDB();

    $consulta = "SELECT * FROM solicitudregistro";
    $resultadoo = mysqli_query($db, $consulta);
    $rows = $resultadoo -> fetch_assoc();

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


    $query = " UPDATE solicitudregistro SET primerNombre='$PrimerNombre',segundoNombre='$SegundoNombre',primerApellido='$PrimerApellido',segundoApellido='$SegundoApellido',
    fechaNacimiento='$FechaNacimiento',curp='$Curp',correoElectronico='$Correo',direccion='$Direccion',telefono='$Telefono',carreraAelegir='$Carrera' WHERE primerNombre = '$rows[primerNombre]'";

        echo $query;

        $resultado = mysqli_query($db, $query);

        if($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin/propiedades/inscripcion/inscripcion.php');
        }