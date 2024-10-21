<div class="container">
    <div class="row">
        <div class="col-md-12 dark-model">
            
            <h2>Modificar Administrador</h2>
            <?php     
                foreach($infopersonal->result() as $row)
            ?>    
            <?php
                echo form_open_multipart("tienda/modificarbd");
            ?>

            <input type="hidden" name="idpersonal" value="<?php echo $row->id_personal; ?>">
            <input type="text" class="form dark-model" name="nombre" placeholder="Escribe nombre" value="<?php echo $row->nombre_personal; ?>">
            <input type="text" class="form dark-model" name="apellido1" placeholder="Escribe apellido paterno" value="<?php echo $row->apellido1_personal; ?>">
            <input type="text" class="form dark-model" name="apellido2" placeholder="Escribe apellido materno" value="<?php echo $row->apellido2_personal; ?>">
            <input type="text" class="form dark-model" name="ci" placeholder="Escribe C.I." value="<?php echo $row->ci_personal; ?>">
            <input type="text" class="form dark-model"  name="telefono" placeholder="Escribe Telefono" value="<?php echo $row->telefono_personal; ?>">
            <input type="text" class="form dark-model" name="adicional" placeholder="Escribe Residencia, observaciones" value="<?php echo $row->adicional_personal; ?>">
            
            <button type="submit" class="btn dark-mode">Modificar Empleado</button>
	
            <?php
                echo form_close();
            ?>


        </div>
    </div>
</div>
