<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background: linear-gradient(to right, #a759b3, #3f60cc);">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">EL ARMARIO ENCANTADO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>index.php/tienda/index">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/disfraz/categoria">Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/tienda/servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/tienda/contactos">Contactos</a>
          </li>
        </ul>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="btn  me-2" href="<?php echo base_url(); ?>index.php/usuarios/index">Iniciar Sección</a>
          </li>
          <li class="nav-item">
            <a class="btn" href="<?php echo base_url(); ?>index.php/tienda/carrito">
              <i class="fas fa-shopping-cart"></i> Carrito
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>