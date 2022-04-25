<?php 

    require '../includes/funciones.php';
    $auth = estaAutenticado();

    if(!$auth) {
        header('Location: /');
    }

    

    // Incluye un template

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <div class="botones">
            <input type="submit" value="Inscripcion y Reinscripcion" class="boton-verde" onclick="location='propiedades/inscripcion/inscripcion.php'">
            <input type="submit" value="Proceso de Produccion" class="boton-verde" onclick="location='propiedades/produccion/produccion.php'">
            <input type="submit" value="Entrega de Servicio" class="boton-verde" onclick="location='propiedades/entrega/entrega.php'">
            <input type="submit" value="Proceso de Postventa" class="boton-verde" onclick="location='propiedades/postventa/postventa.php'">
        </div>
        
    </main>

<?php 


    incluirTemplate('footer');
?>