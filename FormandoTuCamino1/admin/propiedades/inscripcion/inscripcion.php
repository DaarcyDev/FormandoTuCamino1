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
    $query = "SELECT * FROM solicitudregistro";

    // Consultar la BD 
    $resultadoConsulta = mysqli_query($db, $query);
     
    // Incluye un template

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Inscripcion y Reinscripcion</h1>

        <a href="/admin/propiedades/inscripcion/crear.php" class="boton boton-verde">Nueva Propiedad</a>


        <table class="propiedades">
            <thead>
                <tr>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Curp</th>
                    <th>Correo</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Carrera</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los Resultados -->
                <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr class="resultados">
                    <td><?php echo $propiedad["primerNombre"]; ?></td>
                    <td><?php echo $propiedad["segundoNombre"]; ?></td>
                    <td><?php echo $propiedad["primerApellido"]; ?></td>
                    <td><?php echo $propiedad["segundoApellido"]; ?></td>
                    <td><?php echo $propiedad["fechaNacimiento"]; ?></td>
                    <td><?php echo $propiedad["curp"]; ?></td>
                    <td><?php echo $propiedad["correoElectronico"]; ?></td>
                    <td><?php echo $propiedad["direccion"]; ?></td>
                    <td><?php echo $propiedad["telefono"]; ?></td>
                    <td><?php echo $propiedad["carreraAelegir"]; ?></td>
                    
                    <td>
                            <a type="submit" href="/admin/propiedades/inscripcion/eliminar.php?primerNombre=<?php echo $propiedad['primerNombre']?>" class="boton-rojo-block" value="Eliminar">Eliminar</a>
                            <a type="submit" href="/admin/propiedades/inscripcion/actualizar.php?primerNombre=<?php echo $propiedad['primerNombre']?>" class="boton-amarillo-block" value="Actualizar">Actualizar</a>
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