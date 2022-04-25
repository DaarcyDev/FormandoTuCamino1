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
    $consulta = "SELECT * FROM entregaservicios";
    $resultado = mysqli_query($db, $consulta);
    $rows = $resultado -> fetch_assoc();
    //print_r($rows);
    // Arreglo con mensajes de errores
    $errores = [];

    $Id = '';
    $Clases = '';
    $Dudas = '';
    $Evaluacion = '';



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

        <form class="formulario" method="post" action="/admin/propiedades/entrega/procesar2.php" >
            <fieldset>
                <legend>Información General</legend>

                <label for="Id">Id</label>
                <input type="text" id="Id" name="Id" placeholder="Id" value="<?php echo $rows['ServiciosId']; ?>">

                <label for="Clases">Clases</label>
                <input type="text" id="Clases" name="Clases" placeholder="Clases" value="<?php echo $rows['clases']; ?>">

                <label for="Dudas">Dudas</label>
                <input type="text" id="Dudas" name="Dudas" placeholder="Dudas" value="<?php echo $rows['dudas']; ?>">
                
                <label for="Evaluacion">Evaluacion</label>
                <input type="text" id="Evaluacion" name="Evaluacion" placeholder="Evaluacion" value="<?php echo $rows['evaluacion']; ?>">


            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>
        
    </main>

<?php 

    incluirTemplate('footer');
?> 

