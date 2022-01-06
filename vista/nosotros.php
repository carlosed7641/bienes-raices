<?php
    require '../modelo/includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="../buid/img/nosotros.webp" type="image/webo">
                    <source srcset="../build/img/nosotros.jpg" type="image/jpg">
                    <img loading="lazy" src="../build/img/nosotros.jpg" alt="sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, fuga fugit soluta dolore amet
                    perferendis culpa alias voluptas libero. Ipsa a omnis beatae minus doloribus rerum eveniet corrupti
                    nisi amet. Voluptate, fuga fugit soluta dolore amet
                    perferendis culpa alias voluptas libero. Ipsa a omnis beatae minus doloribus rerum eveniet corrupti
                    nisi amet.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, fuga fugit soluta dolore amet
                    perferendis culpa alias voluptas libero. Ipsa a omnis beatae minus doloribus rerum eveniet corrupti
                    nisi amet.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="../build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Molestiae dolore placeat magnam maxime, natus eos ut nihil commodi consequuntur harum voluptates
                    iusto asperiores aliquid iste dolorum perferendis eius! Ipsa, facilis?</p>
            </div>
            <div class="icono">
                <img src="../build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Molestiae dolore placeat magnam maxime, natus eos ut nihil commodi consequuntur harum voluptates
                    iusto asperiores aliquid iste dolorum perferendis eius! Ipsa, facilis?</p>
            </div>
            <div class="icono">
                <img src="../build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Molestiae dolore placeat magnam maxime, natus eos ut nihil commodi consequuntur harum voluptates
                    iusto asperiores aliquid iste dolorum perferendis eius! Ipsa, facilis?</p>
            </div>
        </div>
    </section>
   
<?php
   incluirTemplate('footer');
?>
