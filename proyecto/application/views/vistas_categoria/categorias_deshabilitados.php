<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Planilla Categorias Deshabilitados</h1>
      <?php echo form_open_multipart('disfraz/categoria_adm'); ?>
        <button type="submit" name="buton2" class="btn btn-primary">VER HABILITADOS</button>
      <?php echo form_close(); ?>

      <br>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Imagen</th>
            <th scope="col">Nombre Categoria</th>
            <th scope="col">Ultima Modificacion</th>
            <th scope="col">Habilitar</th>

          </tr>
        </thead>
        <tbody>
          <?php
            $contador=1;
            foreach($categoria->result() as $row)
          {
          ?>
          <tr>
            <th scope="row"><?php echo $contador; ?></th>
            <td><?php echo $row->img_categoria; ?></td>
            <td><?php echo $row->categoria; ?></td>
            <td><?php echo formatearFecha($row->fecha_modificacion); ?></td>
            <td>
            <?php
            echo form_open_multipart("disfraz/habilitarbd_categoria");
            ?>
            <input type="hidden" name="id_categoria" value="<?php echo $row->id_categoria; ?>">
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
