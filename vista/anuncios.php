<?php
    require '../modelo/includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">

    <h2>Casas y apartamentos en venta</h2>

    <?php 
        $limite = 9;
        include '../modelo/includes/templates/anuncios.php'; //Incluye las propiedades
    ?>
    
    </main>
    <?php incluirTemplate('footer');?>
