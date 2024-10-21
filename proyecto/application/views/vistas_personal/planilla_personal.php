
        <!--seccion de la ´planilla de usuarios -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card-header dark-model">
            <h2>Planilla de Administradores</h2>
            <h2 class="card-title">hola <?php echo $this->session->userdata('tipo'); ?></h2> 
              <div class="card-tools">
                <?php echo form_open_multipart('tienda/agregar'); ?>
                  <button type="submit" name="buton1" class="btn dark-mode ">AGREGAR ADMINISTRADOR</button>
                <?php echo form_close(); ?>
                <br>
                <?php echo form_open_multipart('tienda/deshabilitados'); ?>
                  <button type="submit" name="buton2" class="btn dark-mode">VER. DESHABILITADOS</button>
                <?php echo form_close(); ?>
                    
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Primer Apellido</th>
                      <th scope="col">Segundo Apellido</th>
                      <th scope="col">C.I.</th>
                      <th scope="col">Telefono</th>
                      <th scope="col">Observaciones</th>
                      <th scope="col">Creado</th>
                      <th scope="col">Modificar</th>
                      <th scope="col">Deshabilitar</th>
                      <th scope="col">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $contador=1;
                        foreach($empleados->result() as $row)
                      {
                    ?>
                    <tr>
                      <th scope="row"><?php echo $contador; ?></th>
                      <td><?php echo $contador; ?></td>
                      <td><?php echo $row->nombre_personal; ?></td>
                      <td><?php echo $row->apellido1_personal; ?></td>
                      <td><?php echo $row->apellido2_personal; ?></td>
                      <td><?php echo $row->ci_personal; ?></td>
                      <td><?php echo $row->telefono_personal; ?></td>
                      <td><?php echo $row->adicional_personal; ?></td>
                      <td><?php echo formatearFecha($row->fecha_registro_personal); ?></td>
                      <td>
                        <?php
                          echo form_open_multipart("tienda/modificar");
                        ?>
                        <input type="hidden" name="idpersonal" value="<?php echo $row->id_personal; ?>">
                        <button type="submit" class="btn btn-success">Modificar</button>
                        <?php
                          echo form_close();
                        ?>				
			                </td>

                      <td>
                        <?php
                          echo form_open_multipart("tienda/deshabilitarbd");
                        ?>
                        <input type="hidden" name="idpersonal" value="<?php echo $row->id_personal; ?>">
                        <button type="submit" class="btn btn-warning">Deshabilitar</button>
                        <?php
                          echo form_close();
                        ?>
			                </td>

                      <td>
                        <?php
                          echo form_open_multipart("tienda/eliminarbd");
                        ?>
                        <input type="hidden" name="idpersonal" value="<?php echo $row->id_personal; ?>">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
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
      </div> 
    </div> 
  </div>
</div>


   