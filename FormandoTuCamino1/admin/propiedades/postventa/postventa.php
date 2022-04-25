<?php 

    require '../../../includes/funciones.php';
    $auth = estaAutenticado();

    if(!$auth) {
        header('Location: /');
    }

    // Importar la conexión
    require '../../../includes/config/database.php';
    $db = conectarDB();

    // Escribir el Query
    $query = "SELECT * FROM certificadotramites";

    // Consultar la BD 
    $resultadoConsulta = mysqli_query($db, $query);
     

    // Incluye un template

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Inscripcion y Reinscripcion</h1>

        <a href="/admin/propiedades/postventa/crear.php" class="boton boton-verde">Nueva Propiedad</a>


        <table class="propiedades">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Calificacion</th>
                    <th>Cursos</th>
                    <th>Fechas</th>
                    <th>Numero de control</th>

                </tr>
            </thead>

            <tbody> <!-- Mostrar los Resultados -->
                <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                    <tr class="resultados">
                    <td><?php echo $propiedad["id"]; ?></td>
                    <td><?php echo $propiedad["Nombres"]; ?></td>
                    <td><?php echo $propiedad["Apellidos"]; ?></td>
                    <td><?php echo $propiedad["Calificacion"]; ?></td>
                    <td><?php echo $propiedad["Cursos"]; ?></td>
                    <td><?php echo $propiedad["fecha"]; ?></td>
                    <td><?php echo $propiedad["numeroControl"]; ?></td>

                    
                    <td>
                            <a type="submit" href="/admin/propiedades/postventa/eliminar.php?id=<?php echo $propiedad['id']?>" class="boton-rojo-block" value="Eliminar">Eliminar</a>
                            <a type="submit" href="/admin/propiedades/postventa/actualizar.php?primerNombre=<?php echo $propiedad['id']?>" class="boton-amarillo-block" value="Actualizar">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php 

    // Cerrar la conexion
    mysqli_close($db);

    incluirTemplate('footer');
?>