<?php

    if(!isset($_SESSION)) {
        session_start();
    } 

    $auth = $_SESSION['login'] ?? false;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/bienesraices/build/css/app.css">
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : '';?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/bienesraices/">
                    <img src="/bienesraices/build/img/logo.svg" alt="Logo tipo de vienes raices">
                </a>
                <div class="mobile-menu">
                    <img src="/bienesraices/build/img/barras.svg" alt="icono de menu responsive">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/bienesraices/build/img/dark-mode.svg">
                    <nav class="navegacion"><!-- Navegación -->
                        <a href="/bienesraices/vista/nosotros.php">Nosotros</a>
                        <a href="/bienesraices/vista/anuncios.php">Anuncios</a>
                        <a href="/bienesraices/vista/blog.php">Blog</a>
                        <a href="/bienesraices/vista/contacto.php">Conctacto</a>
                        <?php if($auth): //Solo aparece cuando haya inicio de sesión ?> 
                            <a href="/bienesraices/vista/cerrar-sesion.php">Cerrar Sesión</a>
                        <?php endif;  ?>
                        <?php if(!$auth): //Solo aparece cuando haya inicio de sesión ?> 
                            <a href="/bienesraices/vista/login.php">Iniciar Sesión</a>
                        <?php endif;  ?>
                    </nav><!-- Cierre Navegación -->
                </div>
            </div>
            <?php echo $inicio ? "<h1>Venta de Casas y Apartamentos Exclusivos de Lujo</h1>": ''; ?>
        </div>
    </header>