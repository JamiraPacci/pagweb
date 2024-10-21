<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1>Editar Reserva</h1>
        <?php
        
            foreach($inforeserva->result() as $row)
        ?>    
        <?php
            echo form_open_multipart("reservas/modificarbd_res");
        ?>
   
        <!--label for="id_usuarios">Nombre del Usuario:</label>
        <input type="text" name="id_usuarios" value="<//?php echo $row->id_usuarios; ?>" required>
        <br>
        <label for="fecha_reserva">Fecha de la Reserva:</label>
        <input type="date" name="fecha_reserva" value="<//?php echo $row->fecha_reserva; ?>" required>
        <br>
        <label for="id_disfraz">Disfraz:</label>
        <input type="text" name="id_disfraz" value="<//?php echo $row->id_disfraz; ?>" required>
        <br>
        <button type="submit">Actualizar</button-->
        <input type="text" name="descripcion" value="<?php echo $row->descripcion_reserva; ?>" required>
      <input type="text" name="observaciones" value="<?php echo $row->observacion_reserva; ?>" required>
      <input type="date" name="fecha" value="<?php echo $row->fecha_reserva; ?>" required>
      
      <button type="submit" class="btn btn-primary">ACTUALIZAR</button>

        <?php
            echo form_close();
        ?>

        </div>
    </div>
</div>
    

