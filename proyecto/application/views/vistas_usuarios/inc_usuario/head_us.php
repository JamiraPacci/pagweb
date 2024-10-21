<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/stcky-footer-navbar.css">
    <style>

      
      .bg-gradient {
            background: linear-gradient(to right, #8e44ad, #3498db, #1abc9c);
            color: white;
      }
      body {
            font-family: 'Sofadi One', cursive;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            font-family: 'Sofadi One', cursive;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-container button {
            font-family: 'Sofadi One', cursive;
            width: 100%;
            padding: 10px;
            background: linear-gradient(to right, #b06ab3, #4568dc);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        .login-container button:hover {
            background: linear-gradient(to right, #a759b3, #3f60cc);
        }

        .login-container .forgot-password {
            text-align: right;
            font-size: 14px;
            margin-top: 10px;
        }

        .login-container .forgot-password a {
            color: #888;
            text-decoration: none;
        }

        .login-container .forgot-password a:hover {
            text-decoration: underline;
        }

        .logo-title {
            font-family: 'Sofadi One', cursive;
            color: #333;
            font-weight: bold;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container {
          display: flex;
          max-width: 800px; /* Ajusta el ancho máximo */
          width: 100%; /* Ocupa todo el ancho disponible */
          padding: 20px; /* Espaciado interno */
          margin: 20px; /* Espaciado externo */
          background-color: white; /* Fondo blanco */
          justify-content: center;
          border-radius: 10px; /* Bordes redondeados */
          align-items: center;
          text-align: center;
          flex-direction: column; /* Flex en columna */
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
          gap: 0; /* Elimina el espacio entre los divs */
        }

      .left-section, .right-section {
        flex: 1; /* Ambas secciones ocupan el mismo espacio */
        margin: 0;
        padding: 0; /* Elimina espaciado interno */
        border: none; /* Asegura que no haya borde */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        flex-direction: column;
      }

      input {
        width: 100%; /* Ocupa todo el ancho disponible */
        max-width: 300px; /* Opcional: establecer un ancho máximo */
        padding: 10px; /* Añadir un espaciado interno */
        margin: 10px 0; /* Añadir espacio entre los inputs */
        box-sizing: border-box; /* Para asegurar que padding y border se incluyan en el ancho total */
      }

      .mask-logo {
        max-width: 100%; /* Asegúrate de que la imagen no exceda su contenedor */
        height: auto; /* Mantiene la relación de aspecto */
      }

      @media (max-width: 600px) {
    .login-container {
        flex-direction: column; /* Apila las secciones verticalmente en pantallas más pequeñas */
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
}

    </style>
    
</head>
<body class="d-flex flex-column h-100">
  <br>
  <br>
  