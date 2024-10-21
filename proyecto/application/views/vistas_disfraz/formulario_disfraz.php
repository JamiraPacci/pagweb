    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Agregar Disfraz</h2>
          <button type="submit" class="btn dark-mode">Agregar Disfraz</button>
          <br>
          <br>
          <?php echo form_open_multipart("tienda/agregarbd_dis");?>
          <select name="id_categoria" class="form-control form-select form-select-lg" required>
            <option value="" disabled selected>Seleccione una...</option>
            <?php
            foreach ($infocategorias->result() as $row) {
            ?>
            <option value="<?php echo $row->id_categoria?>"><?php echo $row->categoria?></option>
            <?php
            }
            ?>
          </select>

          <input type="text" class="form-control dark-model" name="nombre_disfraz" placeholder="Escribe nombre" required>
          <input type="text" class="form-control dark-model" name="color" placeholder="Color del Disfraz" required>
          <input type="number" class="form-control dark-model" name="talla" placeholder="Talla" required>
          <input type="number" class="form-control dark-model" name="precio" placeholder="Precio unitario" required>
          <input type="number" class="form-control dark-model" name="cantidad" placeholder="Cantidad de Disfraces" required>
          <input type="text" class="form-control dark-model" name="estado" placeholder="Disponible " required>
          <input type="text" class="form-control dark-model" name="descripcion" placeholder="reparaciones, observaciones" required>
 
          <?php
          echo form_close();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>