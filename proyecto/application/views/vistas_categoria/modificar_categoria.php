<div class="container">
    <div class="row">
        <div class="col-md-12 dark-model">
            
            <h2>MODIFICAR CATEGORIA</h2>
            <?php     
                foreach($infocategoria->result() as $row)
            ?>    
            <?php
                echo form_open_multipart("disfraz/modificarbd_categoria");
            ?>

            <input type="hidden" name="id_categoria" value="<?php echo $row->id_categoria; ?>">
            <input type="text" class="form dark-model" name="categoria" placeholder="Cambiar Categoria" value="<?php echo $row->categoria; ?>">
            <input type="file" name="userfile">
            <button type="submit" class="btn dark-mode">MODIFICAR CATEGORIA</button>
	
            <?php
                echo form_close();
            ?>


        </div>
    </div>
</div>