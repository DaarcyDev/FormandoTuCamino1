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
    $consulta = "SELECT * FROM certificadotramites";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = [];

    $Id = '';
    $Nombres = '';
    $Apellidos = '';
    $Calificacion = '';
    $Cursos = '';
    $Fecha = '';
    $NumeroControl = '';


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

        <form class="formulario" method="post" action="/admin/propiedades/postventa/procesar.php" >
            <fieldset>
                <legend>Información General</legend>

                <label for="Id">Id</label>
                <input type="text" id="Id" name="Id" placeholder="Id" value="<?php echo $Id; ?>">

                <label for="Nombres">Nombres</label>
                <input type="text" id="Nombres" name="Nombres" placeholder="Nombres" value="<?php echo $Nombres; ?>">

                <label for="Apellidos">Apellidos</label>
                <input type="text" id="Apellidos" name="Apellidos" placeholder="Apellidos" value="<?php echo $Apellidos; ?>">
                
                <label for="Calificacion">Calificacion</label>
                <input type="text" id="Calificacion" name="Calificacion" placeholder="Calificacion" value="<?php echo $Calificacion; ?>">
                
                <label for="Cursos">Cursos</label>
                <input type="text" id="Cursos" name="Cursos" placeholder="Cursos" value="<?php echo $Cursos; ?>">
                
                <label for="Fecha">Fecha</label>
                <input type="text" id="Fecha" name="Fecha" placeholder="Fecha" value="<?php echo $Fecha; ?>">
       
                <label for="NumeroControl">NumeroControl</label>
                <input type="text" id="NumeroControl" name="NumeroControl" placeholder="NumeroControl" value="<?php echo $NumeroControl; ?>">


            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
        
    </main>

<?php 
    incluirTemplate('footer');
?> 

