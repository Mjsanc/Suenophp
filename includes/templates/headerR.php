<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria 2.0</title>
    <link rel="stylesheet" href="<?= WEBROOT ?>assets/css/inmobiliaria.css">
</head>
<body>
    <header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="<?= WEBROOT ?>"><img src="<?= WEBROOT ?>assets/img/logo.png" alt=""></a>
                <div class="mobile-menu">
                    <img src="<?= WEBROOT ?>assets/img/barras.svg" alt="icono menu responsive">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="<?= WEBROOT ?>assets/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="nosotros.php" class="<?php active('nosotros.php');?>">Nosotros</a>
                        <a href="anuncios.html" class="<?php active('anuncios.php');?>">Anuncios</a>
                        <a href="blog.html" class="<?php active('blog.php');?>">Blog</a>
                        <a href="contacto.html" class="<?php active('contacto.php');?>">Contacto</a>
                    </nav>
                </div>
            </div>
            <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
        </div>
       
    </header>