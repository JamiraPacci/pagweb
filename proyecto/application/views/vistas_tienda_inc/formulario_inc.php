
<br>
<main class="flex-grow-1 d-flex align-items-center justify-content-center">
    <div class="login-container d-flex flex-column flex-md-row align-items-center">
        
        <div class="left-section d-flex align-items-center justify-content-center mb-4 mb-md-0">
            <img src="<?php echo base_url(); ?>img/eslogan.png" alt="¡TRANSFÓRMATE en un click!" class="mask-logo">
        </div>
            <!--  -->
        
        <div class="right-section d-flex flex-column align-items-center"> 
            <h1>EL ARMARIO ENCANTADO</h1>
            <?php echo form_open_multipart("usuarios/validarusuario"); ?>
                <div class="form-group">
                    <input type="text" name="login" placeholder="Usuario" required class="form-control mb-3">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Contraseña" required class="form-control mb-3">
                </div>
                <button type="submit" class="btn btn-primary">INICIAR SESIÓN</button>
                <div class="forgot-password mt-3">
                    <a href="<?php echo base_url(); ?>index.php/usuarios/agregar_us">Registrate</a>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</main>



    