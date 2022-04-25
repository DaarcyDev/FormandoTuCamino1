<?php 

    require '../../../includes/funciones.php';
    $auth = estaAutenticado();

    if(!$auth) {
        header('Location: /');
    }

    // Base de datos
    require '../../../includes/config/database.php';
    $db = conectarDB();

    // Consultar para obtener los vendedores
    $consulta = "SELECT * FROM solicitudregistro";
    $resultado = mysqli_query($db, $consulta);
    $rows = $resultado -> fetch_assoc();
    //print_r($rows);
    // Arreglo con mensajes de errores
    $errores = [];

    $PrimerNombre = '';
    $SegundoNombre = '';
    $PrimerApellido = '';
    $SegundoApellido = '';
    $FechaNacimiento = '';
    $Curp = '';
    $Correo = '';
    $Direccion = '';
    $Telefono = '';
    $Carrera = '';



    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="post" action="/admin/propiedades/inscripcion/procesar2.php" >
            <fieldset>
                <legend>Información General</legend>

                <label for="PrimerNombre">Primer Nombre</label>
                <input type="text" id="PrimerNombre" name="PrimerNombre" placeholder="Primer Nombre" value="<?php echo  $rows['primerNombre']; ?>">

                <label for="SegundoNombre">Segundo Nombre</label>
                <input type="text" id="SegundoNombre" name="SegundoNombre" placeholder="Segundo Nombre" value="<?php echo  $rows['segundoNombre']; ?>">
                
                <label for="PrimerApellido">Primer Apellido</label>
                <input type="text" id="PrimerApellido" name="PrimerApellido" placeholder="Primer Apellido" value="<?php echo  $rows['primerApellido']; ?>">

                <label for="SegundoApellido">Segundo Apellido</label>
                <input type="text" id="SegundoApellido" name="SegundoApellido" placeholder="Segundo Apellido" value="<?php echo  $rows['segundoApellido']; ?>">
                
                <label for="SegundoApellido">Fecha de Nacimiento</label>
                <input type="text" id="SegundoApellido" name="FechaNacimiento" placeholder="FechaNacimiento" value="<?php echo  $rows['fechaNacimiento']; ?>">

                <label for="Curp">Curp</label>
                <input type="text" id="Curp" name="Curp" placeholder="Curp" value="<?php echo  $rows['curp'] ?>">
                
                <label for="Correo">Correo</label>
                <input type="text" id="Correo" name="Correo" placeholder="Correo" value="<?php echo  $rows['correoElectronico'] ?>">

                <label for="Direccion">Direccion</label>
                <input type="text" id="Direccion" name="Direccion" placeholder="Direccion" value="<?php echo  $rows['direccion'] ?>">
                
                <label for="Telefono">Telefono</label>
                <input type="text" id="Telefono" name="Telefono" placeholder="Telefono" value="<?php echo  $rows['telefono']; ?>">

                <label for="Carrera">Carrera</label>
                <input type="text" id="Carrera" name="Carrera" placeholder="Carrera" value="<?php echo  $rows['carreraAelegir']; ?>">


            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>
        
    </main>

<?php 

    incluirTemplate('footer');
?> 

