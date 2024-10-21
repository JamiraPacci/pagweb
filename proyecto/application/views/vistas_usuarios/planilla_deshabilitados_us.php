<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Planilla Usuarios Deshabilitados</h1>

      <?php echo form_open_multipart('tienda/usuarios'); ?>
        <button type="submit" name="buton2" class="btn dark-mode">VER HABILITADOS</button>
      <?php echo form_close(); ?>

      <br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Login</th>
            <th scope="col">Habilitar</th>

          </tr>
        </thead>
        <tbody>
          <?php
            $contador=1;
            foreach($logeados->result() as $row)
          {
          ?>
          <tr>
            <th scope="row"><?php echo $contador; ?></th>
            <td><?php echo $contador; ?></td>
            <td><?php echo $row->login; ?></td>
            <td>
              <?php
                echo form_open_multipart("usuarios/habilitarbd_us");
              ?>
              <input type="hidden" name="idusuario" value="<?php echo $row->id_usuarios; ?>">
              <input type="submit" name="buttonz" value="Habilitar" class="btn dark-mode">
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
