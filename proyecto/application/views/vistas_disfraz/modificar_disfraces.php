<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Modificar Disfraz</h2>
            
            <br>
            <br>
            <?php
                foreach($infodisfraz->result() as $row)
            ?>    
            <?php echo form_open_multipart("tienda/modificarbd_dis");?>

            <input type="hidden" name="id_disfraz" value="<?php echo $row->id_disfraz; ?>">
            <input type="text" class="form-control  dark-model" name="nombre_disfraz" placeholder="Escribe nombre del disfraz" value="<?php echo $row->nombre_disfraz; ?>" required>
            <input type="text" class="form-control  dark-model" name="color" placeholder="Color del disfraz" value="<?php echo $row->color; ?>" required>
            <input type="number" class="form-control  dark-model" name="talla" placeholder="Talla" value="<?php echo $row->talla; ?>" required>
            <input type="number" class="form-control  dark-model" name="precio" placeholder="Presio unitario" value="<?php echo $row->precio; ?>" required>
            <input type="number" class="form-control  dark-model" name="cantidad" placeholder="Catidad de trajes" value="<?php echo $row->cantidad; ?>" required>
            <input type="text" class="form-control  dark-model" name="estado" placeholder="Escribe " value="<?php echo $row->estado; ?>" required>
            <input type="text" class="form-control dark-model" name="descripcion" placeholder="Escribe Telefono" value="<?php echo $row->descripcion; ?>" required>
            <input type="file" name="userfile">
            <button type="submit" class="btn dark-mode">Modificar Disfraz</button>
            <?php
                echo form_close();
            ?>

        </div>
    </div>
</div>
