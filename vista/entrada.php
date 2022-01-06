<?php
    require '../modelo/includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="../build/img/destacada2.webp" type="image/webp">
            <source srcset="../build/img/destacada2.jpg" type="image/jpg">
            <img loading="lazy" src="../build/img/destacada2.jpg" alt="imagen">
        </picture>
        <p class="info-meta">Escrito el: <span>12/11/2021</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste iusto similique non tempora error illum ad
                earum voluptatibus quasi eum molestias nobis excepturi et adipisci dolorem, maxime saepe unde ex?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste iusto similique non tempora error illum ad
                earum voluptatibus quasi eum molestias nobis excepturi et adipisci dolorem, maxime saepe unde ex?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste iusto similique non tempora error illum ad
                earum voluptatibus quasi eum molestias nobis excepturi et adipisci dolorem, maxime saepe unde ex?</p>
        </div>
    </main>
   
<?php incluirTemplate('footer');?>
   