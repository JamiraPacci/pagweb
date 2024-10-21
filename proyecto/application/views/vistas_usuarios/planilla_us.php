
    <div class="container">
      <!--seccion de la ´planilla de usuarios -->
        <div class="row">
          <div class="col-md-12">
            <div class="card dark-model">
              <h1>Planilla de Usuarios</h1>

              <?php echo form_open_multipart('usuarios/deshabilitados_us'); ?>
              <button type="submit" name="buton2" class="btn dark-mode">VER. DESHABILITADOS</button>
              <?php echo form_close(); ?>

              <br>
              
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Login</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Deshabilitar</th>
                    <th scope="col">Eliminar</th>

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
                    <td><?php echo $row->login; ?></td>
                    <td><?php echo formatearFecha($row->fecha_registro_us); ?></td>
                    <td>
                      <?php echo form_open_multipart("usuarios/deshabilitarbd_us");?>
                        <input type="hidden" name="idusuario" value="<?php echo $row->id_usuarios; ?>">
                        <input type="submit" name="buttonz" value="Deshabilitar" class="btn dark-mode">
                      <?php echo form_close();?>
			              </td>

                    <td>
                      <?php
                        echo form_open_multipart("usuarios/eliminarbd_us");
                      ?>
                      <input type="hidden" name="idusuario" value="<?php echo $row->id_usuarios; ?>">
                      <input type="submit" name="buttonx" value="Eliminar" class="btn dark-mode">
                      <?php echo form_close();?>
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
    </div>
  </div>
</div>


   