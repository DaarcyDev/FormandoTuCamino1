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
    $consulta = "SELECT * FROM curso";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = [];

    $idCurso = '';
    $Material = '';
    $Tema = '';
    $DocenteN = '';


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

        <form class="formulario" method="post" action="/admin/propiedades/produccion/procesar.php" >
            <fieldset>
                <legend>Información General</legend>

                <label for="idCurso">idCurso</label>
                <input type="text" idCurso="idCurso" name="idCurso" placeholder="idCurso" value="<?php echo $idCurso; ?>">
                
                <label for="Material">Material</label>
                <input type="text" Material="Material" name="Material" placeholder="Material" value="<?php echo $Material; ?>">

                <label for="Tema">Tema</label>
                <input type="text" id="Tema" name="Tema" placeholder="Tema" value="<?php echo $Tema; ?>">

                <label for="DocenteN">DocenteN</label>
                <input type="text" id="DocenteN" name="DocenteN" placeholder="DocenteN" value="<?php echo $DocenteN; ?>">


            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
        
    </main>

<?php 
    incluirTemplate('footer');
?> 

