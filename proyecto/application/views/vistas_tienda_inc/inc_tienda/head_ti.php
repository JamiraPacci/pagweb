<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/stcky-footer-navbar.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
  <style>

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


      body {
        font-family: 'Sofadi One', cursive;
        background-color: #f9f9f9;
            
      }

      .custom-navbar {
        background: linear-gradient(to right, #a759b3, #3f60cc); /* color del menu Azul oscuro a azul claro */
      }

      .navbar-nav a {
  color: #f9f9f9; /* Color del texto igual al fondo */
  text-decoration: none; /* Elimina el subrayado */
}

.navbar-nav a:hover {
  color: darkgray; /* Cambia el color al pasar el mouse para visibilidad */
  text-decoration: underline; /* Opción de subrayado al pasar el mouse */
}


      /*estilos del carrucel*/

      .carousel-caption {
      background-color: rgba(0, 0, 0, 0.5); /* Fondo negro semitransparente */
      padding: 20px; /* Espaciado alrededor del texto */
      border-radius: 21px; /* Bordes redondeados para la caption */
      }

      .carousel-item {
      height: auto; /* Asegura que cada item ocupe toda la altura de la ventana */
      }

      .carousel-item img {
      width: 100%; /* Asegúrate de que la imagen llene su contenedor */
      height: 100%; /* Altura total */
      object-fit: contain; /* Mantiene la proporción y evita recortes */
      border-radius: 21px; /* Bordes redondeados en las imágenes */
      }

      .image-container {
        height: 100%; /* Altura completa del contenedor */
        overflow: hidden; /* Evita que la imagen sobresalga */
        border-radius: 21px; /* Bordes redondeados en el contenedor */
        display: flex; /* Usa flexbox para centrar la imagen */
        justify-content: center; /* Centrar horizontalmente */
        align-items: center; /* Centrar verticalmente */
      }

      .responsive-title {
        font-size: 2.5rem; /* Ajusta el tamaño de la fuente para el título */
      }

      .responsive-text {
        font-size: 1.25rem; /* Ajusta el tamaño de la fuente para el texto */
      }


  </style>
    
    
</head>
<body>