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
    $query = "SELECT * FROM entregaservicios";

    // Consultar la BD 
    $resultadoConsulta = mysqli_query($db, $query);
     

    // Incluye un template

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Inscripcion y Reinscripcion</h1>

        <a href="/admin/propiedades/entrega/crear.php" class="boton boton-verde">Nueva Propiedad</a>


        <table class="propiedades">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Clases</th>
                    <th>Dudas</th>
                    <th>Evaluacion</th>

                </tr>
            </thead>

            <tbody> <!-- Mostrar los Resultados -->
                <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr class="resultados">
                    <td><?php echo $propiedad["ServiciosId"]; ?></td>
                    <td><?php echo $propiedad["clases"]; ?></td>
                    <td><?php echo $propiedad["dudas"]; ?></td>
                    <td><?php echo $propiedad["evaluacion"]; ?></td>

                    
                    <td>
                            <a type="submit" href="/admin/propiedades/entrega/eliminar.php?ServiciosId=<?php echo $propiedad['ServiciosId']?>" class="boton-rojo-block" value="Eliminar">Eliminar</a>
                            <a type="submit" href="/admin/propiedades/entrega/actualizar.php?primerNombre=<?php echo $propiedad['ServiciosId']?>" class="boton-amarillo-block" value="Actualizar">Actualizar</a>
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