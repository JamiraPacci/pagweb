<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Carousel Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    

    <!-- Bootstrap core CSS -->
<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
      .bg-violet-blue {
      background: linear-gradient(to right, #6a0dad, #1e90ff); /* Degradado de violeta a azul */
      }

      .shadow-sm {
      box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important; /* Añadir sombra */
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

      .image-container img {
        max-width: 100%; /* Limita el ancho de la imagen */
        max-height: 100%; /* Limita la altura de la imagen */
        width: auto; /* Mantiene la proporción de la imagen */
        height: auto; /* Mantiene la proporción de la imagen */
        object-fit: contain; /* Asegura que la imagen se ajuste sin recortarse */
        border-radius: 21px; /* Bordes redondeados en la imagen */
      }

      .responsive-title {
        font-size: 2.5rem; /* Ajusta el tamaño de la fuente para el título */
      }

      .responsive-text {
        font-size: 1.25rem; /* Ajusta el tamaño de la fuente para el texto */
      }

      /* Ajustes responsivos */
      @media (max-width: 768px) {
      .responsive-title {
       font-size: 1.75rem; /* Tamaño más pequeño en pantallas pequeñas */
      }

      .responsive-text {
        font-size: 1rem; /* Tamaño más pequeño en pantallas pequeñas */
      }
      }
</style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>bootstrap/css/carousel.css" rel="stylesheet">
  </head>
  <body>