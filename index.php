<?php
    //Conexión a base de datos
    require 'modelo/includes/funciones.php';
    //Incluye el header
    incluirTemplate('header', true); 
?>

<!--seccion principal-->
<main class="contenedor seccion">
    <h1>Más sobre nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Molestiae dolore placeat magnam maxime, natus eos ut nihil commodi consequuntur harum voluptates
                iusto asperiores aliquid iste dolorum perferendis eius! Ipsa, facilis?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Molestiae dolore placeat magnam maxime, natus eos ut nihil commodi consequuntur harum voluptates
                iusto asperiores aliquid iste dolorum perferendis eius! Ipsa, facilis?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
            <h3>A tiempo</h3>
            <p>Molestiae dolore placeat magnam maxime, natus eos ut nihil commodi consequuntur harum voluptates
                iusto asperiores aliquid iste dolorum perferendis eius! Ipsa, facilis?</p>
        </div>
    </div>
</main><!--cierre seccion principal-->

<!--seccion apartamentos-->
<section class="seccion contenedor">
    <h2>Casas y Apartamentos en venta</h2>

    <?php 
        $limite = 3;
        include 'modelo/includes/templates/anuncios2.php';
    ?>
    <div class="alinear-derecha">
        <a href="vista/anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section><!--cierre seccion apartamentos-->


<!--seccion contacto-->
<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo</p>
    <a href="vista/contacto.php" class="boton-amarillo">Contáctanos</a>
</section><!--cierre seccion contacto-->

<!--seccion inferior-->
<div class="contenedor seccion seccion-inferior">
    <section class="blog"><!--seccion del blog-->
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog"><!--entrada del blog-->
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="vista/entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>09/11/21</span> por: <span>Admin</span></p>
                    <p>
                        Consejos para construir una terraza en el techo de tu casa
                    </p>
                </a>
            </div>
        </article><!--cierre entrada del blog-->

        <article class="entrada-blog"><!--entrada del blog-->
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="vista/entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p>Escrito el: <span>09/11/21</span> por: <span>Admin</span></p>
                    <p>
                        Maximiza el espacio de tu hogar con esta guía
                    </p>
                </a>
            </div>
        </article><!--cierre entrada del blog-->
    </section><!--cierre seccion del blog-->

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente manera, muy buena atención y la casa que me ofecieron, me
                encantó.
            </blockquote>
            <p>-Carlos Ilias</p>
        </div>
    </section>
</div><!--cierre seccion inferior-->

<?php incluirTemplate('footer'); //Incluye el footer ?>


