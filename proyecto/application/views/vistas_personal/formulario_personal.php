<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Agregar Personal</h1>

        <?php

            echo form_open_multipart("tienda/agregarbd");
        ?>
        <button type="submit" class="btn dark-mode">Agregar Administrador</button>

        <input type="text" class="form-control dark-model " name="nombre" placeholder="Escribe nombre" required >
        <input type="text" class="form-control dark-model" name="apellido1" placeholder="Escribe apellido paterno" required>
        <input type="text" class="form-control dark-model" name="apellido2" placeholder="Escribe apellido materno" required>
        <input type="text" class="form-control dark-model " name="ci" placeholder="Escribe C.I." required>
        <input type="text" class="form-control dark-model" name="telefono" placeholder="Escribe Telefono" required>
        <input type="text" class="form-control dark-model" name="adicional" placeholder="Escribe Residencia, observaciones" required>
	
        <?php
            echo form_close();
        ?>

        </div>
    </div>
</div>
