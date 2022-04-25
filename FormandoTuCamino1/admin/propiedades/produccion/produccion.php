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
    $query = "SELECT * FROM curso";

    // Consultar la BD 
    $resultadoConsulta = mysqli_query($db, $query);
     

    // Incluye un template

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Inscripcion y Reinscripcion</h1>

        <a href="/admin/propiedades/produccion/crear.php" class="boton boton-verde">Nueva Propiedad</a>


        <table class="propiedades">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Material</th>
                    <th>Tema</th>
                    <th>DocenteN</th>


                </tr>
            </thead>

            <tbody> <!-- Mostrar los Resultados -->
                <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr class="resultados">
                    <td><?php echo $propiedad["idCurso"]; ?></td>
                    <td><?php echo $propiedad["material"]; ?></td>
                    <td><?php echo $propiedad["tema"]; ?></td>
                    <td><?php echo $propiedad["docenteN"]; ?></td>

                    
                    <td>
                            <a type="submit" href="/admin/propiedades/produccion/eliminar.php?idCurso=<?php echo $propiedad['idCurso']?>" class="boton-rojo-block" value="Eliminar">Eliminar</a>
                            <a type="submit" href="/admin/propiedades/produccion/actualizar.php?primerNombre=<?php echo $propiedad['idCurso']?>" class="boton-amarillo-block" value="Actualizar">Actualizar</a>
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