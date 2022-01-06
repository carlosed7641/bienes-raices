<?php

require '../../modelo/includes/funciones.php';
$auth = estaAutenticado();

if(!$auth) {
    header('Location: /bienesraices/');
}

//Importar la conexión 
require '../../modelo/includes/config/database.php';
$db = conectarDB();

//Escribir el query
$query = "SELECT * FROM propiedades";

//Consultar la BD
$resultadoConsulta = mysqli_query($db, $query);



//Mostrar mensaje condicional
$resultado = $_GET['resultado'] ?? null; //Busca el valor y si no existe null

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {

        //Eliminar la propiedad
        $query = "SELECT imagen FROM propiedades WHERE id = ${id}";

        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);

        unlink('../vista/imagenes/' . $propiedad['imagen']);

        $query = "DELETE FROM propiedades WHERE id = ${id}";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('Location: /bienesraices/controlador/admin?resultado=3');
        }
    }
}

//Incluir Template
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h3>Administrador de Bienes Raices</h3>
    <?php if (intval($resultado) ===  1) : ?>
        <p class="alerta exito">Anuncio Creado Correctamente</p>
    <?php elseif (intval($resultado) ===  2) :  ?>
        <p class="alerta exito">Anuncio Actualizado Correctamente</p>
    <?php elseif (intval($resultado) ===  3) :  ?>
        <p class="alerta exito">Anuncio Eliminado Correctamente</p>
    <?php endif; ?>

    <a href="/bienesraices/controlador/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad </a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td><img src="/bienesraices/vista/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"></td>
                    <td>$ <?php echo $propiedad['precio']; ?></td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>


<?php
//Cerrar conexión
mysqli_close($db);
incluirTemplate('footer');
?>