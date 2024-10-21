<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Planilla Disfraces Deshabilitados</h1>
      <?php echo form_open_multipart('tienda/disfraces'); ?>
        <button type="submit" name="buton2" class="btn btn-primary">VER HABILITADOS</button>
      <?php echo form_close(); ?>

      <br>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            <th scope="col">Color</th>
            <th scope="col">Talla</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
            <th scope="col">Ingreso</th>
            <th scope="col">Habilitar</th>

          </tr>
        </thead>
        <tbody>
          <?php
            $contador=1;
            foreach($disfraces->result() as $row)
          {
          ?>
          <tr>
            <th scope="row"><?php echo $contador; ?></th>
            <td><?php echo $row->nombre_disfraz; ?></td>
            <td><?php echo $row->img_disfraz; ?></td>
            <td><?php echo $row->categoria; ?></td>
            <td><?php echo $row->color; ?></td>
            <td><?php echo $row->talla; ?></td>
            <td><?php echo $row->precio; ?></td>
            <td><?php echo $row->cantidad; ?></td>
            <td><?php echo $row->estado; ?></td>
            <td><?php echo $row->descripcion; ?></td>
            <td><?php echo formatearFecha($row->fecha_registro_disfraz); ?></td>
            <td>
            <?php
            echo form_open_multipart("tienda/habilitarbd_dis");
            ?>
            <input type="hidden" name="id_disfraz" value="<?php echo $row->id_disfraz; ?>">
            <input type="submit" name="buttonz" value="Habilitar" class="btn btn-warning">
            <?php
            echo form_close();
            ?>
		        </td>        
          </tr>
          <?php
            $contador++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
