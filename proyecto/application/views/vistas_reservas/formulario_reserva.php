<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1>Crear una nueva reserva</h1>
        <?php

            echo form_open_multipart("reservas/agregarbd_res");
        ?>
   
        <!--label for="id_usuarios">Nombre del Usuario:</label>
        <input type="text" name="id_usuarios" required>
        <br>
        <label for="fecha_reserva">Fecha de la Reserva:</label>
        <input type="date" name="fecha_reserva" required>
        <br>
        <label for="id_disfraz">Disfraz:</label>
        <input type="text" name="id_disfraz" required>
        <br>
        <button type="submit">Guardar</button-->

        <input type="text" name="descripcion" placeholder="Ingrese descripcion" required>
      <input type="text" name="observaciones" placeholder="Ingrese observacion" required>
      <input type="date" name="fecha" placeholder="Ingrese fecha" required>
      
      <button type="submit" class="btn btn-primary">AGREGAR RESERVA</button>

        <?php
            echo form_close();
        ?>

        </div>
    </div>
</div>
    

