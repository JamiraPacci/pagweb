<div class="container">
      <!--seccion de la ´planilla de disfraces -->
      <div class="row">
        <div class="col-12">
          <div class="card-header dark-model" >

              <h2>Planilla Categorias de Disfraces</h2>
              
            <?php echo form_open_multipart('disfraz/deshabilitados_categoria'); ?>
              <button type="submit" name="buton2" class="btn dark-mode">VER. DESHABILITADOS</button>
            <?php echo form_close(); ?>
            
          </div> 
          <div class="card-body table-responsive p-0">                         
            <table class="table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th scope="col">Imagen</th>
                  <th scope="col">Cambiar Imagen</th>
                  <th scope="col">Nombre Categoria</th>
                  <th scope="col">Ultima Modificacion</th>
                  <th scope="col">Modificar</th>
                  <th scope="col">Deshabilitar</th>
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
                  <td>
                  <?php
                    $img=$row->img_categoria;
                      //si imagen en la base de datos es vacio
                      if ($img=="") 
                      {
                        ?>
                          <img src="<?php echo base_url();?>/uploads/categoria/imagen.png" width="80px" height="100">
                        <?php
                              
                      }
                      //cargar de la base de datos
                      else{
                        ?>
                          <img src="<?php echo base_url();?>uploads/categoria/<?php echo $img;?>" width="80px" height="100">
                        <?php
                      }
                  ?>
                  </td>
                      <td>
                        <?php
                          echo form_open_multipart("disfraz/subir_img_cat");
                        ?>
                        <input type="hidden" name="id_categoria" value="<?php echo $row->id_categoria; ?>">
                        <button type="submit" class="btn btn-info">Subir</button>
                        <?php
                          echo form_close();
                        ?>
                      </td>
                  <td><?php echo $row->categoria; ?></td>
                 
                  <td><?php echo formatearFecha($row->fecha_modificacion); ?></td>
                  <td>
                  <?php echo form_open_multipart("disfraz/modificar_categoria");?>
                  <input type="hidden" name="id_categoria" value="<?php echo $row->id_categoria; ?>">
                  <input type="submit" name="buttony" value="Modificar" class="btn btn-success">
                  <?php echo form_close();?>				
			        </td>

                  <td>
                  <?php
                    echo form_open_multipart("disfraz/deshabilitarbd_categoria");
                  ?>
                  <input type="hidden" name="id_categoria" value="<?php echo $row->id_categoria; ?>">
                  <input type="submit" name="buttonz" value="Deshabilitar" class="btn btn-warning">
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


   